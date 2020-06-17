<?php

class Security extends Controller{

    

    function __construct(){
        $this->folder_view="security";
        $this->layout="default";
        //se sont des objets de validation 
        $this->validator=new Validator();
        $this->manager=new CompteManager();
        session_start();
        
    }

    
    public function showPage(){           
       $this->view="connexion";
       $this->render();
    }

    public function inscription($layout="default"){ 
        $this->layout="$layout";          
        $this->view="inscription";
        $this->render();
    }   
    public function page_jeu(){                  
        $this->view="page_jeu";
        $this->render();
    }    

    
    public function creerCompte(){ 
        
         //création compte admin ou joueur qui dépend du profil
            //et on fait appel au layout qui correspond
            //soit joueur ou admin qui clic sur le bouton
            $profil="joueur";
            //NB:le layout default représente le layout joueur
            $layout="default";
            if(isset($_SESSION['userConnect'])){
                //quand admin se connecte
                $profil="admin";
                $layout="admin";
            }
        
        if(isset($_POST['btn_inscription'])){            
               extract($_POST);
           
            //validation des données oblogatoires
          $this->validator->isVide($login,'login',"Login Obligatoire");
          $this->validator->isVide($password,'password',"Mot de Passe Obligatoire");
          $this->validator->isVide($nom,'nom',"nom Obligatoire");
          $this->validator->isVide($prenom,'prenom',"prenom Obligatoire");
          $this->validator->isVide($confirmerPassword,'confirmerPassword',"confirmation Mot de Passe  Obligatoire");
         

          if($this->validator->isValid()){ 
            //validation password
            $this->validator->isEgal($password,$confirmerPassword,"confirmerPassword","les deux mots de passe ne sont pas identiques");
            if($this->validator->isValid()){
                //login exist
                $user=$this->manager->loginExist($login);
                if($user==null){
                    //création d'un nouveau compte
                    // on est dans le scénario nominal
                    $compteUser=new Compte();
                    //si on avait mis les attributs a protected au niveau de compte.php
                    //on allait mettre les get et set 
                    $compteUser->login=$login;
                    $compteUser->password=$password;
                    $compteUser->fullName=$fullName=$prenom." ".$nom;
                    $compteUser->profil=$profil;
                   
                    //pour ajouter un compte utilisateur on fait:
                    $result=$this->manager->add($compteUser);
                    if($result){
                        $this->data_view['err_login']= "Compte créer avec succés";
                        $this->inscription("$layout");

                    }

                }else{
                    $this->data_view['err_login']= "Login exist déjà";
                    $this->inscription("$layout");

                }

            }else{
                $errors=$this->validator->getErrors();
                $this->data_view['errors']= $errors;
                $this->inscription("$layout");           
            }


          }else{
                $errors=$this->validator->getErrors();
                $this->data_view['errors']= $errors;
                $this->inscription("$layout");
               
            }
        }else{
            $this->inscription("$layout");
        }     
    }


    public function seConnecter(){
        //Recuperation des Donnée =>$_POST
      
        //quant on clic sur le bouton connexion
        if(isset($_POST['btn_connexion'])){
              //Validation des données saisies
              //Extraire les données d'un tableau associatif =>extract($tab_associatif)
              //$_POST['login']   remplacer $login
              //$_POST['password'] remplacer $password 
                 extract($_POST);

            $this->validator->isVide($login,'login',"Login Obligatoire");
            $this->validator->isVide($password,'password',"Mot de Passe  Obligatoire");
            if($this->validator->isValid()){
               $compte= $this->manager->getUserByLoginPwd($login,$password);
               if($compte!=null){
                   //Compte Existe

                   $_SESSION['userConnect']=$compte;

                  if($compte->getProfil()==="joueur"){
                      $this->page_jeu("joueur");
                     // echo "Affichage Page de Jeu";
                  }else{
                    
                    $this->inscription("admin");
                  }
               }else{
                     //Login ou Mot de passe Incorrect
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
        }else{
            //quant on actualise la page pour afficher de nouveau 
            //la vue admin
            $this->inscription("admin");

        }
    }
    public function seDeconnecter(){
        //destruction des données utilisateur
        session_destroy();
        unset($_SESSION['userConnect']);
        //redirection vres la page de connexion
        $this->view="connexion";
        $this->render();
    }

}