<?php

class Controller{
    protected $validator;
    protected $view;
    protected $folder_view;
    protected $layout;    
    protected $data_view=[];
    protected $manager;   


    
    public function render(){
        ob_start();
        extract($this->data_view);             
        require_once('views/'.$this->folder_view.'/'.$this->view.'.php');
        $content_for_layout=ob_get_clean();
        require_once('views/layout/'.$this->layout.'.php');
    }





}