<?php
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

// Get all folders from the current directory, but exclude the "vendor" folder
$folders = getFolders('/vendor/');
?>
<html>
    <body>
    <?php foreach($folders as $folder) { // Iterate through the folders list ?>
        <h2><?=$folder?></h2>
        <ul>
            <?php foreach(getPHPFiles($folder) as $file) { // Get all PHP files of the current folder, add a link to them and exlcude the folder path from their name?>
            <li><a href=<?=$file?>><?=str_replace($folder . '/', '', $file)?></a></li>
            <?php } ?>
        </ul>
    <?php } ?>
    </body>
</html>