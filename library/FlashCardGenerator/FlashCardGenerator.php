<?php

namespace FlashCardGenerator;

class FlashCardGenerator
{

    protected $dataSource;
    protected $data;


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
        return $this->flashCards;
    }

    public function setFlashCards($flashCards){
        $this->flashCards = $flashCards;
    }

    public function exportCram(){

    }

}