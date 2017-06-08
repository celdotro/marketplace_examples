<?php

function getPHPFiles($path){
    return glob($path . '/*.php');
}

function getFolders($excludeFilter = NULL){
    $folderList = glob('*', GLOB_ONLYDIR );
    
    if(is_null($excludeFilter))
        return $folderList;
    else
        return preg_grep($excludeFilter, $folderList, PREG_GREP_INVERT);
}

$folders = getFolders('/vendor/');

?>
<html>
    <body>
    <?php foreach($folders as $folder) { ?>
        <h2><?=$folder?></h2>
        <ul>
            <?php foreach(getPHPFiles($folder) as $file) { ?>
            <li><a href=<?=$file?>><?=str_replace($folder . '/', '', $file)?></a></li>
            <?php } ?>
        </ul>
    <?php } ?>
    </body>
</html>