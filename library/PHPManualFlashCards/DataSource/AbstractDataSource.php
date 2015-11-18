<?php

namespace PHPManualFlashCards\DataSource;

abstract class AbstractDataSource
{

    abstract function formatData(&$data);

    abstract function getData($category=null);

    abstract function getCategories();

    public function getFormattedData($category=null){
        return $this->formatData($this->getData($category));
    }

    public function getFlashCards($category=null){
        return $this->getFormattedData($category);
    }

}