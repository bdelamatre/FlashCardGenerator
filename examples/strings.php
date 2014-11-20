<?php

require_once('../vendor/autoload.php');

//include_once('../library/FlashCardGenerator/FlashCardGenerator.php');
//include_once('../library/FlashCardGenerator/FlashCard.php');
//include_once('../library/FlashCardGenerator/DataSource/PHPManualDataSource.php');

//$dataSource = new FlashCardGenerator\DataSource\PHPManualDataSource('../resources/phpmanual/php-chunked-xhtml');

$flashCardGenerator = new \FlashCardGenerator\FlashCardGenerator();
//$flashCardGenerator->setDataSource($dataSource,"strings");

var_dump($flashCardGenerator->getFlashCards());

//echo $generator->generateFlashCardsCram('strings');