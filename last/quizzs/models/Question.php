<?php

    class Question{
        public $questions;
        public $nbreDePoints;
        public $typeDeReponse;
        public $reponse;
        
       

        public function __construct($rowBd=null){           
            if($rowBd!=null){
                $this->questions=($rowBd['questions']);
                $this->nbreDePoints=($rowBd['nbreDePoints']);
                $this->typeDeReponse=($rowBd['typeDeReponse']);
                $this->reponse=($rowBd['reponse']);               
            }           
        }

        public function getQuestions(){
            return $this->questions;
        }
    }
?>