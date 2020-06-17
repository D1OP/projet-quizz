<?php
class Question extends Controller{

    function __construct(){
        $this->folder_view="question";
        $this->layout="default";
        $this->validator=new Validator();
        $this->manager=new QuestionManager();
        session_start();

    }

    public function list_questions($layout="admin"){ 
        $this->layout="$layout";          
        $this->view="list_questions";
        $this->render();
    }   

    public function add_question($layout="admin"){ 
        $this->layout="$layout";          
        $this->view="add_question";
        $this->render();


        if(isset($_POST['btn_enregistrer'])){            
            extract($_POST);
        
         //validation des données oblogatoires
            $this->validator->isVide($questions,'questions',"Login Obligatoire");
            $this->validator->isVide($nbreDePoints,'nbreDePoints',"Mot de Passe Obligatoire");
            $this->validator->isVide($typeDeReponse,'typeDeReponse',"nom Obligatoire");
            $this->validator->isVide($reponse,'reponse',"prenom Obligatoire");
            
        if($this->validator->isValid()){
        //question exist                         
             $user=$this->manager->questionsExist($questions);
             if($user==null){
                 //création d'un nouveau compte
                 // on est dans le scénario nominal
                 $questionUser=new Question();
                 //si on avait mis les attributs a protected au niveau de compte.php
                 //on allait mettre les get et set 
                 $questionUser->questions=$questions;
                 $questionUser->nbreDePoints=$nbreDePoints;
                 $questionUser->typeDeReponse=$typeDeReponse;
                 $questionUser->reponse=$reponse;
                
                 //pour ajouter un compte utilisateur on fait:
                 $result=$this->manager->add($questionUser);
                 if($result){
                     $this->data_view['err_question']= "question créer avec succés";
                     $this->add_question("$layout");

                 }

             }else{
                 $this->data_view['err_questions']= "question exist déjà";
                 $this->add_question("$layout");

             }
            }else{
                $errors=$this->validator->getErrors();
                $this->data_view['errors']= $errors;
         
            }
        }else{
            $this->add_question("$layout");
        }     

    
    } 
    
    

}


