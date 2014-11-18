<?php

namespace FlashCardGenerator\DataSource;

abstract class AbstractDataSource
{

    abstract function formatData(&$data);

    abstract function getData($category=null);

    public function getFormattedData($category=null){
        return $this->formatData($this->getData($category));
    }

}