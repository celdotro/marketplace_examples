<?php
/**
 * [RO] Bine ai venit, rau ai nimerit :(
 *      Aceasta este o pagina pentru indexarea partilor principale ale proiectului. Fie ruleaza acest script, fie viziteaza urmatoarea adresa pentru mai multe instructiuni: https://github.com/celdotro/marketplace_examples#ro
 * [EN] If you arrived here, then you're in the wrong place :(
 *      This is just a page that indexes the main parts of the project. Either run this script or visit this following link for instructions: https://github.com/celdotro/marketplace_examples#en
 */

### FUNCTIONS ###
/**
 * Get all PHP files from the specified path (all files that have the .php extension)
 * 
 * @param $path
 * @return void
 */
function getPHPFiles($path){
    return glob($path . '/*.php');
}

/**
 * Get all folders from the current directory and exclude those specified in the parameter's regex string
 * 
 * @param $excludeFilter
 * @return void
 */
function getFolders($excludeFilter = NULL){
    $folderList = glob('*', GLOB_ONLYDIR );
    
    if(is_null($excludeFilter))
        return $folderList;
    else
        return preg_grep($excludeFilter, $folderList, PREG_GREP_INVERT);
}
### END OF FUNCTIONS ###

### MAIN ###
// Get all folders from the current directory, but exclude the "vendor" folder
$folders = getFolders('/vendor/');

// Email address (obfuscated for bots, but deobfuscated on script run)
$obf = 'JHpOcXFlID0gb25mcjY0X3FycGJxcignVU84bENQSUNGTzBxJykgXiBvbmZyNjRfcXJwYnFyKCdyVDlsSzBOd016OWxYbVZsTHo5MFp5ODVad1ZtWUQ9PScpOw==';
$f1 = 'o' . 't' . (6 * 2 + 1);
$f1 = "\ns" . 't' . 'r' . '_' . 'r' . $f1;
$f2 = 'se' . ( sqrt(4) * pow(2, 5) ) . '_de' . 'cod' . 'e';
$f2 = 'b' . 'a' . $f2;
eval("\nev" . 'al(' . $f1 . '(' . $f2 . '(\'' . $obf . "'))\n);");

// Determine which type of interface PHP is using and optimize output
if(php_sapi_name() == 'cli'){ // Manually structured output
    foreach($folders as $key => $folder){ // Iterate through the folders list
        echo '[' . ($key + 1 ) . '] ' . $folder . ": {\n"; // Add folder and index (start from 1)
        foreach(getPHPFiles($folder) as $file){ // Get each PHP file in the current folder
            echo "\t" . __DIR__ . '/' . $file . "\n"; // Add the full path for the current file
        }
        echo "}\n\n"; // Close the bracket and add one blank row
    }

    // Add contact information
    echo 'Contact: ' . $mAddr;
    
    // Add blank line at the end of output
    echo "\n"; 
} else { // Output as HTML
?>
<html>
    <body>
    <?php foreach($folders as $folder) { // Iterate through the folders list ?>
        <h2><?=$folder?></h2>
        <ul>
            <?php foreach(getPHPFiles($folder) as $file) { // Get each PHP file in the current folder ?>
            <li><a href=<?=$file // Add link to current file ?>><?=str_replace($folder . '/', '', $file) // Exclude the folder path from the file name ?></a></li>
            <?php } ?>
        </ul>
    <?php } ?>
    <hr>
    <h1>Contact: <a href="mailto:<?=$mAddr?>"><?=$mAddr // Add email address ?></a> </h1>
    </body>
</html>
<?php }
### END OF MAIN ###
?>