<?php

class Jeu extends Controller{

    

    function __construct(){
        $this->folder_view="jeu";
        $this->layout="default";               
    }


    public function list_joueur($layout="admin"){ 
        $this->layout="$layout";          
        $this->view="list_joueur";
        $this->render();
    }
    


}