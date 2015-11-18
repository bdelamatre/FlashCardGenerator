<?php

require_once('../vendor/autoload.php');

/**
 * This example shows
 */

//to see how the DataSource is constructed, see the file included below
require_once('datasource.phpmanual.php');

//construct an instance of the FlashCardGenerator
$flashCardGenerator = new PHPManualFlashCards\FlashCardGenerator();

//pass in the data source
$flashCardGenerator->setDataSource($dataSource,null,false);

//use the following method which returns an array of categories
var_dump($flashCardGenerator->getCategories());