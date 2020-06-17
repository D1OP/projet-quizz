<!doctype html>
<html lang="vf">

<head>
    <title>Connexion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=URL_ASSETS?>/css/classe.css">


</head>

<body>

    <header class="bgSecondary">
        <h1 class="text-center m-0">
            Le plaisir de jouer
        </h1>
        </h1>
        <div class="img position-absolute "
        style="left: 10px; top: 10px;" href=""><img src="../assets/img/logo-QuizzSA.png"> </div>
    </header>

    <div id="main" class="d-flex justify-content-center align-items-center ">

    <section style="width:92vw ;">
        <div class="section-header bgPrimary position-relative ">
            <h3 class=" w-100 py-2 d-inline-block text-center">CREER ET PARAMETRER VOS QUIZZ</h3>               
            <a class="deconnexion position-absolute btn btn-primary"
            style="right: 10px; top: 10px;"  href="<?=URL_ROOT?>/security/seDeconnecter" role="button">Deconnexion</a>    
        </div>


        <div class="section-body bgWhite px-5 " style="height: 75vh;">

            <div class="row d-flex align-items-center h-100">
                <!-- Menu -->
                <div class="col-md-4 pl-3">
                    <div class="menu " style="width: 85%;">
                        <div class="menu-header  py-3 d-flex align-items-center justify-content-between px-3">
                            <div class="avatar ">
                                <img class="img-fluid" src="" alt="">
                            </div>
                            <h5 class="text-white">admin</h5>
                        </div>

                        <nav class="nav flex-column py-3 ">
                            <a class="nav-link" href="<?=URL_ROOT?>/question/list_questions" >
                            Liste questions </a>
                            <a class="nav-link" href="<?=URL_ROOT?>/security/creerCompte">Créer Admin</a>
                            <a class="nav-link" href="<?=URL_ROOT?>/jeu/list_joueur">Liste joueurs</a>
                            <a class="nav-link" href="<?=URL_ROOT?>/question/add_question">Creer Question</a>
                        </nav>
                    </div>
                </div>

                    <?php echo $content_for_layout;?> 
                    
                </div>
            
            </div> 
    </div>
    </div>

</body>
</html>