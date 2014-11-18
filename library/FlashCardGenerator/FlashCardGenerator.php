<?php

namespace FlashCardGenerator;

class FlashCardGenerator
{

    protected $dataSource;
    protected $data;

    public function __construct($dataSource=null){
        $this->setDataSource($dataSource);
    }

    public function setDataSource($dataSource){
        $this->dataSource = $dataSource;
    }

    /**
     * @return DataSource\AbstractDataSource
     */
    public function getDataSource(){
        return $this->dataSource;
    }

    /*public function scrape($category,$refresh=false){
        if(is_null($this->scrape) || $refresh==true){
            $this->scrape = $this->getScraper()->scrape($category);
        }
    }

    public function getData(){
        return $this->scrape;
    }*/

    /*public function generateFlashCardsCram($category){
        $this->scrape($category);
        $return = '';
        foreach($this->scrape as $key=>$cardInfo){
            $return .= "{$cardInfo['front']}[endfront]{$cardInfo['back']}[endback]";
        }
        return $return;
    }*/

}