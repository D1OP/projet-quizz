<div class="main">
<div id="" class="d-flex justify-content-center align-items-center">
    <div id="inscription-form" class="w-150 bgWhite container rounded  text-secondary py-2">
        <div class="inscription-form-body row">
                    <h1 class="h4 m-0">S'INSCRIRE</h1>
                        <br>Pour proposer un quizz
                        <hr class="w-50 m-0">
                                                                                                                                   
                            <div class="col-md-7">
                                <?php
                                    if(isset($err_login)){
                                ?>
                                    <small id="fileHelpId" class="form-text text-danger font-weight-bold "><?=$err_login?></small>
                                 <?php 
                                     }
                                ?>  
                                            <form class="pr-5"  method="post" action="<?=URL_ROOT?>/security/creerCompte">
                                                <div class="form-group mb-1">
                                                    <label class="m-0 p-1" for="prenom">Prenom</label>
                                                    <input name="prenom" type="text" class="form-control" id="prenom">
                                                    <?php
                                                    if(isset($errors['prenom'])){
                                                ?>
                                                    <small id="fileHelpId" class="form-text text-danger font-weight-bold "><?=$errors['prenom']?></small>
                                                    <?php 
                                                    }
                                                ?>
                                                </div>
                        
                                                <div class="form-group mb-1">
                                                    <label class="m-0 p-1" for="nom">Nom</label>
                                                    <input name="nom" type="text" class="form-control" id="nom">
                                                    <?php
                                                        if(isset($errors['nom'])){
                                                    ?>
                                                     <small id="fileHelpId" class="form-text text-danger font-weight-bold "><?=$errors['nom']?></small>
                                                     <?php 
                                                         }
                                                        ?>   
                                                </div>
                        
                                                <div class="form-group  mb-1">
                                                    <label class="m-0 p-1" for="login">Login</label>
                                                    <input name="login" type="text" class="form-control" id="login">
                                                    <?php
                                                    if(isset($errors['login'])){
                                                ?>
                                                    <small id="fileHelpId" class="form-text text-danger font-weight-bold "><?=$errors['login']?></small>
                                                    <?php 
                                                    }
                                                ?>      
                                                </div>
                        
                                                <div class="form-group mb-1">
                                                    <label class="m-0 p-1" for="password">Password</label>
                                                    <input name="password" type="password" class="form-control" id="password">
                                                    <?php
                                                        if(isset($errors['password'])){
                                                    ?>
                                                     <small id="fileHelpId" class="form-text text-danger font-weight-bold "><?=$errors['password']?></small>
                                                    <?php 
                                                        }
                                                    ?>
                                                </div>
                        
                                                <div class="form-group mb-1">
                                                    <label class="m-0 p-1" for="confirmerPassword">Confirmer Password</label>
                                                    <input name="confirmerPassword" type="password" class="form-control" id="confirmerPassword">
                                                    <?php
                                                         if(isset($errors['confirmerPassword'])){
                                                    ?>
                                                        <small id="fileHelpId" class="form-text text-danger font-weight-bold "><?=$errors['confirmerPassword']?></small>
                                                    <?php 
                                                    }
                                                ?>
                                                </div>
                        
                                               
                                                <div class="form-group  my-2 d-flex justify-content-between">
                                                    <input type="file" class="custom-file " id="imgUser" name="imgUser">
                                                    <small  class="form-text text-danger"></small>
                                                </div>
                        
                        
                                                <button type="submit" name="btn_inscription" class="btn btn-primary">Creer compte</button>
                        
                                        </div>
                                            <div class="col-md-4">
                                                <div class="avatar w-75 ">                                                
                                                    <img class="img-fluid" style="" src="./img/" alt="">                                                    
                                                </div>                                               
                                                </div>
                                            </div>
                                    </div>
                </div>

            </div>
            
</div>



<script>
    //Chargement de L'image
    const imgUpload= document.querySelector("#imgUser");
              
              const prevUpload=()=>{
                    //Récuperation de  l'image  du champ input
                      let fileImg=imgUpload.files[0]
                      //Transformer l'image en un flux d'octets
                      let reader=new FileReader();
                      if(fileImg){
                          reader.readAsDataURL(fileImg)
                          reader.onloadend=function(){
                                const avatar= document.querySelector("#avatar");
                                avatar.src=reader.result
                                avatar.style.width="50px"
                                avatar.style.borderRadius="10px"
                          }
                      }
             }
             //Ecouteur Evenement
              imgUpload.addEventListener("change",prevUpload);
             
            
             </script>
