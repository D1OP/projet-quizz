<?php
    define("URL_ASSETS","http://localhost/Nouveau/quizzs/assets");


    require_once('./libs/Router.php');
    $router=new Router();
    $router->getRoute();
    //$sec=new Security();
    //$sec->showPage();
?>