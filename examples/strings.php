<?php

include_once('../library/FlashCardGenerator/FlashCardGenerator.php');
include_once('../library/FlashCardGenerator/DataSource/PHPManualDataSource.php');

$dataSource = new FlashCardGenerator\DataSource\PHPManualDataSource('../resources/php-chunked-xhtml');

$flashCardGenerator = new \FlashCardGenerator\FlashCardGenerator($dataSource);

var_dump($flashCardGenerator->getDataSource()->getData('strings'));

//echo $generator->generateFlashCardsCram('strings');