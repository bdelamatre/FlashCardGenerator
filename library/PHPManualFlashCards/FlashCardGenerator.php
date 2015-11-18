<?php

namespace PHPManualFlashCards;

class FlashCardGenerator
{

    protected $dataSource;
    protected $data;
    protected $flashCards;

    public function setDataSource($dataSource,$category=null,$prefetchFlashCardsFromDataSource=true){
        $this->dataSource = $dataSource;
        if(!is_null($category) && $prefetchFlashCardsFromDataSource==true){
            $this->setFlashCardsFromDataSource($category);
        }
    }

    public function setFlashCardsFromDataSource($category){
        $this->setFlashCards($this->getDataSource()->getFlashCards($category), $category);
    }

    /**
     * @return DataSource\AbstractDataSource
     */
    public function getDataSource(){
        return $this->dataSource;
    }

    public function getCategories(){
        return $this->getDataSource()->getCategories();
    }

    public function getFlashCards($category){

        if(is_null($this->dataSource)){
            throw new \Exception("A data source must be set first.");
        }

        if(is_null($this->flashCards[$category])){
            $this->setFlashCardsFromDataSource($category);
        }

        return $this->flashCards[$category];
    }

    public function setFlashCards($flashCards,$category){
        $this->flashCards[$category] = $flashCards;
    }

    public function exportCram(){

    }

}