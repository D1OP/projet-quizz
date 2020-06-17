<?php

class QuestionManager extends Manager{

    function __construct(){
         $this->tableName="Question";
    }



    public function add($objet){
        //création d'une nouvelle question à partir de la DB
        $sql="INSERT INTO `question` (`questions`, `nbreDePoints`, `typeDeReponse`, `reponse`) VALUES ('".$objet->questions."', '".$objet->nbreDePoints."', '".$objet->typeDeReponse."', '".$objet->reponse."')";         
        return  $this->executeUpdate( $sql)!=0;

    }
    public function update($objet){

    }
    
    public function findById($id){

    }

    public function questionsExist($questions){
        $sql="select * from $this->tableName where questions='$questions'";
        $datas=$this->executeSelect($sql);
        return count($datas)==1? $datas[0]:null;
    }
        
}