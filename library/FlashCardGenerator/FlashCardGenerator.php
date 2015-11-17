<?php

namespace FlashCardGenerator;

class FlashCardGenerator
{

    protected $dataSource;
    protected $data;
    protected $flashCards;


    public function setDataSource($dataSource,$category=null,$getFlashCardsFromDataSource=true){
        $this->dataSource = $dataSource;
        $this->setFlashCardsFromDataSource($category);
    }

    public function setFlashCardsFromDataSource($category){

        $this->setFlashCards($this->getDataSource()->getFlashCards($category));
    }

    /**
     * @return DataSource\AbstractDataSource
     */
    public function getDataSource(){
        return $this->dataSource;
    }

    public function getFlashCards(){

        if(is_null($this->dataSource)){
            throw new \Exception("A data source must be set first.");
        }

        return $this->flashCards;
    }

    public function setFlashCards($flashCards){
        $this->flashCards = $flashCards;
    }

    public function exportCram(){

    }

}