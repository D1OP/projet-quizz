<?php
require_once('./libs/Controller.php');
class Security extends Controller{

   
    function __construct(){
        $this->folder_view="security";
        $this->layout="default";    
        $this->validator=new Validator();
        $this->manager=new CompteManager();
    }

    public function render(){
        ob_start();
        require_once('views/'.$this->folder_view.'/'.$this->view.'.php');
        $content_for_layout=ob_get_clean();
        require_once('views/layout/'.$this->layout.'.php');
    }
    public function showPage(){
       
        $this->view="connexion";
        $this->render();
    }
   
    public function creerCompte(){
        $this->view="inscription";
        $this->render();
    }
   
    public function creerAdmin(){
        $this->view="admin";
        $this->render();
    }

    public function seConnecter(){
       
      
        if(isset($_POST['btn_connexion'])){
            
               extract($_POST);

          $this->validator->isVide($login,'login',"Login Obligatoire");
          $this->validator->isVide($password,'password',"Mot de Passe  Obligatoire");
          if($this->validator->isValid()){
             $compte= $this->manager->getUserByLoginPwd($login,$password);
             if($compte!=null){
               
                if($compte->getProfil()==="joueur"){
                    echo "Affichage Page de Jeu";
                }else{
                    echo "Affichage Page de l'Admin";
                }
             }else{
                 
                   $this->data_view['err_login']= "Login ou Mot de passe Incorrect";
                   $this->view="connexion";
                   $this->render();
             }
          }else{
              $errors=$this->validator->getErrors();
            $this->data_view['errors']= $errors;
              $this->view="connexion";
              $this->render();
             
          }
      }
     
    
    }

    public function seDeconnecter(){
        echo"seDeconnecter";
    }


}