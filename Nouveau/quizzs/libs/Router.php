<?php
class Router{


    public function getRoute(){

        try{
            spl_autoload_register(function ($class) {
                $pathLibs = "./libs/".$class.".php";
                $pathModels = "./models/".$class.".php";
                $pathControllers = "./controllers/".$class.".php";
                
                if (file_exists($pathLibs)) {
                    require $pathLibs;      
                }elseif(file_exists($pathControllers)){
                    require $pathControllers;                          
                }elseif(file_exists($pathModels)){
                    require $pathModels;  
                }
            }); 
            if(isset($_GET['url'])){
                               
                $url=explode("/",$_GET['url']); 

            //var_dump($url);
                $controller=ucfirst($url[0]);
                $pathControllers = "./controllers/".$controller.".php";
                if(file_exists($pathControllers)){
                    $cont=new $controller();
                    if(isset($url[1])){
                        if(method_exists($cont,$url[1])){
                            $action=$url[1];                        
                            $cont->{$action}();                                            
                        }   else{
                            $ctrl=new Erreur();
                            $ctrl->showMessage("Méthode n'exite pas dans le controller");
                        }                                                
                        }else{
                        $ctrl=new Security();
                        $ctrl->showPage();
                    }
                }else{
                    $ctrl=new Erreur();
                    $ctrl->showMessage("ce controller n'exite pas");
                }
               
            }else{
                    $ctrl=new Security();
                    $ctrl->showPage();
                }

        }catch(Exeption $ex){
            die("Error");
        }

    }
}