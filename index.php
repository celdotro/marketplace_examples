<?php
/**
 * [RO] Bine ai venit, rau ai nimerit :(
 *      Aceasta este o pagina pentru indexarea partilor principale ale proiectului. Fie ruleaza acest script, fie viziteaza urmatoarea adresa pentru mai multe instructiuni: https://github.com/celdotro/marketplace_examples#ro
 * 
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
$obf = 'JG1BZGRyID0gZnVuY3Rpb24oKXsgLy8gQm90cyBjYW4ndCB1bmRlcnN0YW5kIGNvbW1lbnRzLCBidXQgbWF5YmUgeW91J2xsIGZpbmQgaXQgaGVscGZ1bCA6KQogICAgLy8gU3RhdGUgaXMgc3RhdGljIHNvIGl0IHdpbGwga2VlcCBpdHMgdmFsdWUgYmV0d2VlbiBmdW5jdGlvbiBjYWxscwogICAgc3RhdGljICRzdGF0ZTsgCiAgICAvLyBPbiBmaXJzdCBydW4sIGluaXRpYWxpemUgc3RhdGUgd2l0aCBmYWxzZQogICAgaWYoaXNfbnVsbCgkc3RhdGUpKSAkc3RhdGUgPSBmYWxzZTsKICAgIC8vIFhPUgogICAgJHRvRW5jID0gYmFzZTY0X2RlY29kZSgnSEI4eVBDVlBTQjBkJykgXiBiYXNlNjRfZGVjb2RlKCdlRzl5WDBBalptOXlLekl5WW05ME1sODVNakl6TFE9PScpOwogICAgLy8gQ2hhbmdlIHN0YXRlIHdpdGggZXZlcnkgZnVuY3Rpb24gY2FsbAogICAgJHN0YXRlID0gISRzdGF0ZTsKICAgIC8vIERlcGVuZGluZyBvbiBzdGF0ZSB2YWx1ZSAoYW5kIG9idmlvdXNseSBmdW5jdGlvbiBjYWxsIG9yZGVyKSwgY2hhbmdlIGVuY29kaW5nIGFsZ29yaXRobQogICAgaWYoJHN0YXRlKQogICAgICAgIHJldHVybiBiYXNlNjRfZW5jb2RlKHN0cl9yb3QxMygkdG9FbmMpKTsKICAgIGVsc2UgCiAgICAgICAgcmV0dXJuIHN0cl9yb3QxMyhiYXNlNjRfZW5jb2RlKCR0b0VuYykpOwp9Ow==';
$f1 = 'o' . 't' . (6 * 2 + 1);
$f1 = "\ns" . 't' . 'r' . '_' . 'r' . $f1;
$f2 = 'se' . ( sqrt(4) * pow(2, 5) ) . '_de' . 'cod' . 'e';
$f2 = 'b' . 'a' . $f2;
eval("\nev" . 'al(' . $f2 . '(\'' . $obf . "')\n);");

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
    echo 'Contact: ' . eval("\nreturn {$f1}(" . $f2 . '(\'' . $mAddr() . "')\n);") . "\n";

    // Add README link
    echo 'Readme: ';
    echo "\n\tRomana: https://github.com/celdotro/marketplace_examples#ro";
    echo "\n\tEnglish: https://github.com/celdotro/marketplace_examples#en";
    
    // Add new line at the end of output
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
    <hr><hr><hr>
    <h2>Readme: </h2>
    <ul>
        <li><a href="https://github.com/celdotro/marketplace_examples#ro">Romana</a></li>
        <li><a href="https://github.com/celdotro/marketplace_examples#en">English</a></li>
    </ul>
    <hr><hr><hr>
    <h2>Contact: <a href="mailto:<?=eval("\nreturn {$f1}(" . $f2 . '(\'' . $mAddr() . "')\n);")?>"><?=eval("\nreturn {$f2}(" . $f1 . '(\'' . $mAddr() . "')\n);") // Add contact information ?></a> </h2>
    </body>
</html>
<?php }
### END OF MAIN ###
?>