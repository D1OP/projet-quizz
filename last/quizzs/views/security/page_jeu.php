<div id="main" class="d-flex justify-content-center align-items-center">
        <section style="width:92vw ;">
            <div class="section-header bgPrimary position-relative ">
                <h4 class=" w-100 py-2 d-inline-block text-center">
                    BIENVENUE SUR LA PLATEFORME DE JEU DE QUIZZ
                    <br>JOUER ET TESTER VOTRE NIVEAU DE CULTURE GÉNÉRALE</h4>               
                <a class="deconnexion position-absolute btn btn-primary"
                style="right: 10px; top: 10px;" href="<?=URL_ROOT?>/security/seDeconnecter" role="button">Deconnexion</a>
                <a class="img position-absolute"
                style="left: 10px; top: 10px;" href=""><img src="../assets/img/nn.png"> </a>                                              
            </div>

            <div class="section-body bgWhite px-5 " style="height: 75vh;">
                <div class="row d-flex align-items-center h-100">

                    <div class="" style="height:73vh; width: 200vh; background-color:white;
                     box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);">

                        
                        <a class="position-absolute"
                        style="right: 200px;box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);" 
                        href="" role="button">Top scores </a>
                        
                        <a class=" position-absolute"
                        style="right:300px;box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);" 
                        href="" role="button">Mon score</a>

                        
                        
                        <form class="" id="form-jeu" method="post"> 
                            <textarea class=" mt-4 mm"  id="exampleFormControlTextarea1" 
                            style="margin-top:6vh; width:75vh;height: 15vh; margin-left: 10vh;" > 
                            Question 1/5:
                            LES LANGAGES WEB
                            </textarea>
                            <option class=" offset-5 ">3points </option>
                            <small  class="text-danger" id="error_m"></small>

                            <div class="">                               
                                <input class="" type="checkbox"
                                style="margin-top:10vh; width:4vh;height: 4vh; margin-left:20vh;">  HTML </br>                                                     
                                                 
                                <input class="" type="checkbox"
                                style="margin-top:10vh; width:4vh;height: 4vh; margin-left:20vh;"> R</br> 

                                <input class="" type="checkbox"
                                style="margin-top:10vh; width:4vh;height: 4vh; margin-left:20vh;"> JAVA</br>
                            </div>      
                            <small  class="text-danger" id="error_m"></small>             
                        </form>

                        <button type="submit" class="btn btn-secondary ml-5">Précédent</button>

                        <button type="submit"  name="btn_submit" class="btn btn-primary offset-4 "style="align-items-center">Suivant</button>
                    
                    </div>

                    





                    </div>
                </div>
            </div>


            <script>
const inputs= document.getElementsByTagName("input") 
               for(let input of  inputs){
                input.addEventListener("keyup",function(event){
                       if(event.target.hasAttribute("error")){
                                 //recuperer la valeur de l'attribut error
                                    let idSmall=event.target.getAttribute("error")
                                    //recuperer l'objet Small 
                                    const errorSmall=document.getElementById(idSmall);
                                    errorSmall.innerText=""
                                    //innerHTML=>ajouter du Contenu HTML dans une Balise
                            }
                  })
                }
               document.getElementById("form-question").addEventListener("submit",function(event){
                   let valid=true;
                  for(let input of  inputs){
                      if(!input.value.trim()){
                            valid=false
                            //Verifie si  l'attribut error existe dans le input
                            if(input.hasAttribute("error")){
                                 //recuperer la valeur de l'attribut error
                                    let idSmall=input.getAttribute("error")
                                    //recuperer l'objet Small 
                                    const errorSmall=document.getElementById(idSmall);
                                    errorSmall.innerText="Champ Obligatoire"
                                    //innerHTML=>ajouter du Contenu HTML dans une Balise
                            }
                            
                         }
                            
                  }
                  if(valid==false){
                            event.preventDefault();
                             return false;
                   }
              });



</script>