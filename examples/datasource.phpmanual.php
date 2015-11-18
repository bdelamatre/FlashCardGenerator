<?php

require_once('../vendor/autoload.php');

/**
 *
 * This example shows how to build a DataSource object that references a locally downloaded copy of the
 * PHP Manual. To download a copy of the PHP manual you can run the local script resources/getPHPManual.php
 * which will download and extract the PHP manual and to resources/phpmanual. Alternatively,
 * you can manually download the PHP Manual from the PHP website at  http://php.net/download-docs.php . If
 * you manually download the manual, be sure to change the baseUrl parameter when constructing
 * PHPManualDataSource to reflect the correct path of the downloaded copy.
 *
 */
$dataSource = new PHPManualFlashCards\DataSource\PHPManualDataSource('../resources/phpmanual/php-chunked-xhtml');