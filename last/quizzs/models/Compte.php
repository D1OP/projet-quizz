<?php

    class Compte{
        public $id;
        public $login;
        public $password;
        public $profil;
        public $fullName;
       

        public function __construct($rowBd=null){           
            if($rowBd!=null){
                $this->id=($rowBd['id']);
                $this->login=($rowBd['login']);
                $this->password=($rowBd['password']);
                $this->profil=($rowBd['profil']);
                $this->fullName=($rowBd['fullName']);
                
            }           
        }

        public function getProfil(){
            return $this->profil;
        }
    }
?>