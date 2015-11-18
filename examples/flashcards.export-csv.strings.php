<?php

require_once('../vendor/autoload.php');

/**
 * This example shows how to retrieve flash cards
 */

//to see how the DataSource is constructed, see the file included below
require_once('datasource.phpmanual.php');

//construct an instance of the FlashCardGenerator
$flashCardGenerator = new PHPManualFlashCards\FlashCardGenerator();

//pass in the data source. (optionally you can set the category and pre fetch data at this point as well)
$flashCardGenerator->setDataSource($dataSource);

//use the following method which returns an array of FlashCard objects
var_dump($flashCardGenerator->exportCsv('strings','tmp/flashcards-export-comma.csv'));

//with alternative delimiter
var_dump($flashCardGenerator->exportCsv('strings','tmp/flashcards-export-semicolon.csv',';'));

//cleaning up the temporary file afterwards
var_dump($flashCardGenerator->exportCsv('strings','tmp/flashcards-export-tmp.csv',',',false));