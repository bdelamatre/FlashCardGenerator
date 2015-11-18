<?php

namespace PHPManualFlashCards\Export;

class CsvExport
{

    public function export($flashCards,$filename='flashcards-export.csv',$delimiter=',',$keepFile=true){

        //this allows one or multiple flashcards to be exported at once
        if(!is_array($flashCards)){
            $flashCards = array($flashCards);
        }

        $fp = fopen($filename, 'w');

        //build a CSV delimited string and return
        foreach($flashCards as $flashCard){

            // toArray() converts the flashcard to a PHP array
            fputcsv($fp, $flashCard->toArray(),$delimiter);
        }

        fclose($fp);

        $return = file_get_contents($filename);

        if($keepFile==false){
            unlink($filename);
        }

        return $return;
    }

}