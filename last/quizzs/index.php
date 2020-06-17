<?php
   define("URL_ASSETS","http://localhost/LAST/quizzs/assets");
   //le chemin absolu ou root
   define("URL_ROOT","http://localhost/LAST/quizzs");

  require_once('./libs/Router.php');
   $router=new Router();
   //controller/methode=>UC
   $router->getRoute();
   /*
   $sec=new Security();
   $sec->showPage();
   $obj->{$method}()
   */
?>