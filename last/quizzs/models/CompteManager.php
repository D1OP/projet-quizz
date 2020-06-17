<?php

class CompteManager extends Manager{

    function __construct(){
         $this->tableName="Compte";
    }



    public function add($objet){
        //création d'un nouveau compte à partir de la DB
        $sql="INSERT INTO `compte` (`id`, `login`, `password`, `profil`, `fullName`) VALUES (NULL, '".$objet->login."', '".$objet->password."', '".$objet->profil."', '".$objet->fullName."');";         
        return  $this->executeUpdate( $sql)!=0;

    }
    public function update($objet){

    }
    
    public function findById($id){

    }

    public function loginExist($login){
        $sql="select * from $this->tableName where login='$login'";
        $datas=$this->executeSelect($sql);
        return count($datas)==1? $datas[0]:null;
    }
    

    public function getUserByLoginPwd($login,$pwd){
        $sql="select * from $this->tableName where login='$login' and password='$pwd'";
        $datas=$this->executeSelect($sql);
        return count($datas)==1? $datas[0]:null;
    }
}