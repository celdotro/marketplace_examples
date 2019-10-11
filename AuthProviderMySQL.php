<?php
namespace celmarket;

use celmarket\AuthProvider;
use PDO;

/**
 * AuthProvider class example
 * It saves the tokens by default in files based on provider ID set by user
 * or uid generated from username and password
 *
 *
 */
class AuthProviderMySQL extends AuthProvider
{
    private static $token;
    private static $user;
    private static $password;
    private static $providerID;

    private static $db;
    private static $db_host = 'HOST';
    private static $db_user = 'USER';
    private static $db_password = 'PASSWORD';
    private static $db_database = 'DB';
    
    public function __construct($userName = '', $password = '')
    {
        if (empty($userName) || empty($password)) {
            throw new \Exception('Username or password is missing');
        }

        self::$user = trim($userName);
        self::$password = trim($password);

        // MySQL init
        self::$db = new PDO('mysql:dbname=' . self::$db_database . ';host=' . self::$db_host, self::$db_user, self::$db_password);
    }
    
    public static function setProviderID($providerID = '')
    {
        self::$providerID = $providerID;
    }

    public static function setToken($token = '')
    {
        return self::$token = $token;
    }
    
    public static function checkToken()
    {
        $query = self::$db->prepare('SELECT token FROM marketplace_tokens WHERE provider_id = :provider_id LIMIT 1');
        $query->execute([':provider_id' => (!empty(self::$providerID) ? self::$providerID : md5(self::$user . self::$password))]);
        $token = $query->fetchColumn();

        if ($token) {
            self::setToken($token);
        }

        return $token ? static::$token : self::regenerateToken();
    }
    
    public static function getToken()
    {
        if (!empty(static::$token)) {
            return static::$token;
        }

        $query = self::$db->prepare('SELECT token FROM marketplace_tokens WHERE provider_id = :provider_id LIMIT 1');
        $query->execute([':provider_id' => (!empty(self::$providerID) ? self::$providerID : md5(self::$user . self::$password))]);
        $token = $query->fetchColumn();

        if ($token) {
            return $token;
        }

        return self::regenerateToken();
    }
    
    public static function regenerateToken()
    {
        ### 1. Sanity check ###
        if (empty(self::$user) || empty(self::$password)) {
            throw new \Exception('Username or password is missing');
        }
        $res = Dispatcher::send('login', 'actionLogin', array('username' => self::$user, 'password' => self::$password));

        try {
            if ($res === '') { // Token is null
                throw new \Exception('Token-ul primit este null');
            } elseif (is_string($res) && strstr($res, 'Raspuns invalid:') !== false) { // Invalid answer
                throw new \Exception($res);
            } else {
                // Delete all tokens for this providerID
                $query = self::$db->prepare("DELETE FROM marketplace_tokens WHERE provider_id = :provider_id");
                $query->execute([':provider_id' => (!empty(self::$providerID) ? self::$providerID : md5(self::$user . self::$password))]);
                
                // Insert new token
                $query = self::$db->prepare("INSERT INTO marketplace_tokens (provider_id, token) VALUES (:provider_id, :token)");
                $insert_token = $query->execute([':provider_id' => (!empty(self::$providerID) ? self::$providerID : md5(self::$user . self::$password)), ':token' => $res]);

                if (!$insert_token) {
                    throw new \Exception('Token-ul nu a fost salvat in baza de date');
                }
            }

            // Token static attribute gets the value of the response
            self::$token = $res;
            return self::$token;
        } catch (\Exception $e) {
            // Catch all exceptions, add a message for clarification and re-throw them up the stack
            throw new \Exception('Eroare in procesul de autentificare: ' . $e->getMessage());
        }
    }
}
