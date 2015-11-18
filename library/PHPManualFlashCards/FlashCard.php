<?php

namespace PHPManualFlashCards;

class FlashCard{

    protected $front;
    protected $back;
    protected $metaName;
    protected $metaNotes;

    public function __construct($populateFromArray){
        $this->populateFromArray($populateFromArray);
    }

    public function getFront(){
        return $this->front;
    }

    public function setFront($front){
        $this->front = $front;
    }

    public function getBack(){
        return $this->back;
    }

    public function setBack($back){
        $this->back = $back;
    }

    public function getMetaName(){
        return $this->metaName;
    }

    public function setMetaName($metaName){
        $this->metaName = $metaName;
    }

    public function getMetaNotes(){
        return $this->metaNotes;
    }

    public function setMetaNotes($metaNotes){
        $this->metaNotes = $metaNotes;
    }

    public function populateFromArray($dataArray){
        foreach($dataArray as $propertyName=>$propertyValue){
            if(property_exists($this,$propertyName)){
                if(method_exists($this,'set'.ucfirst($propertyName))){
                    $this->{'set'.ucfirst($propertyName)}($propertyValue);
                }else{
                    $this->$propertyName = $propertyValue;
                }
            }
        }
    }

}
