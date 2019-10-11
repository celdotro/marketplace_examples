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
class AuthProviderMemcached extends AuthProvider
{
    private static $token;
    private static $user;
    private static $password;
    private static $providerID;

    private static $memcached;
    private static $memcached_host = '192.168.0.5';
    private static $memcached_port = 11211;

    public function __construct($userName = '', $password = '')
    {
        if (empty($userName) || empty($password)) {
            throw new \Exception('Username or password is missing');
        }

        self::$user = trim($userName);
        self::$password = trim($password);
 
        // Memcached init
        self::$memcached = new \Memcached;
        self::$memcached->addServer(self::$memcached_host, self::$memcached_port);
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
        $token = self::$memcached->get('celro_' . (!empty(self::$providerID) ? self::$providerID : md5(self::$user . self::$password)));
        
        if($token) {
            self::setToken($token);
        }

        return $token ? static::$token : self::regenerateToken();
    }
    
    public static function getToken()
    {
        if (!empty(static::$token)) {
            return static::$token;
        }

        $token = self::$memcached->get('celro_' . (!empty(self::$providerID) ? self::$providerID : md5(self::$user . self::$password)));
        
        if($token) {
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
                // Delete token for this providerID
                self::$memcached->delete('celro_' . (!empty(self::$providerID) ? self::$providerID : md5(self::$user . self::$password)));

                // Insert new token
                $insert_token = self::$memcached->set('celro_' . (!empty(self::$providerID) ? self::$providerID : md5(self::$user . self::$password)), $res);

                if(!$insert_token)
                    throw new \Exception('Token-ul nu a fost salvat in baza de date');
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