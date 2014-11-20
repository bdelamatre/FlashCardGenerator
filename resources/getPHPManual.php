<?php

define('DOWNLOAD_URL','http://php.net/get/php_manual_en.tar.gz/from/this/mirror');
define('DOWNLOAD_TO_FILE','phpmanual/download.tar.gz');
define('EXTRACT_TO','phpmanual');

try {

    if (!file_exists('phpmanual')) {
        mkdir('phpmanual');
    }

file_put_contents(DOWNLOAD_TO_FILE, fopen(DOWNLOAD_URL, 'r'));

$phar = new PharData(DOWNLOAD_TO_FILE);
$phar->extractTo(EXTRACT_TO);

}catch(Exception $e){
    echo $e->getMessage();
}