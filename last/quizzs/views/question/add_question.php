<div id="" class="d-flex justify-content-center align-items-center main">        
                        <div id="inscription-form" class="w-150 bgWhite container rounded  text-secondary py-2">
                            <div class="inscription-form-body row">



                                <div class="ml-3">                                                                                                                                       
                                    <form class="pr-5" id="form-inscription"  method="post">
                                        <h3 class="ml-5">PARAMETRER VOTRE QUESTION POUR LE JEU</h3>  
                                       
                                            <div class="form-group row">
                                                <label for="question" class="col-md-2 col-form-label">Question</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="question" error="error_question"id="question" rows="3"></textarea>
                                                </div>
                                                <small  class="text-danger" id="error_question"></small>
                                              </div>
                                              <div class="form-group row">
                                                <label for="points" class="col-md-2 col-form-label">Nbre de points</label>
                                                <div class="col-sm-10">
                                                    <select class="custom-select my-1 mr-sm-2" Name="points" id="points"
                                                    error="error_points">
                                                        <option></option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>                                                        
                                                        <option>4</option>
                                                        <option>5</option>
                                                      </select> 
                                                </div>
                                                <small  class="text-danger" id="error_points"></small>
                                              </div>                                              
                                              <div class="form-group row">
                                                <label for="type" class="col-md-2 col-form-label">Type de réponse</label>
                                                <div class="col-sm-10">
                                                    <a class="img position-absolute"
                                                    style="right: -25px;" href=""><img src="../assets/img/ic-ajout-réponse.png"> </a>
                                                <select id="type"  Name="type" class="form-control" error="error_type">                                                
                                                <option></option>
		                                        <option>simple</option>
		                                        <option>text</option>
                                                <option>multiple</option>
                                              </select>
                                            </div>
                                            <small  class="text-danger" id="error_type"></small>
                                            </div>                                                                                            
                                              <div class="form-group row">
                                                <label for="reponse"  class="col-md-2 col-form-label">Réponse 1</label>                                                                                                                                                        
                                                <div class="col-sm-10" name="reponse" id="reponse" error="error_reponse">
                                                    <input type="text" >
                                                    <input type="checkbox">
                                                    <input type="radio">
                                                    <a class="img position-absolute" href=""><img src="../assets/img/ic-supprimer.png"> </a>
                                                </div>
                                                <small  class="text-danger" id="error_reponse"></small>
                                              </div>
                                              

                                        <button type="submit" name="btn_submit" class="btn btn-primary ">Enregistrer</button>
                
                                </div>
                                    
                            </div>
                        </div> 
                    </div>                    



<script>

const textareas= document.getElementsByTagName("textarea") 
               for(let textarea of  textareas){
                textarea.addEventListener("keyup",function(event){
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
               document.getElementById("form-inscription").addEventListener("submit",function(event){
                   let valid=true;
                  for(let textarea of  textareas){
                      if(!textarea.value.trim()){
                            valid=false
                            //Verifie si  l'attribut error existe dans le input
                            if(textarea.hasAttribute("error")){
                                 //recuperer la valeur de l'attribut error
                                    let idSmall=textarea.getAttribute("error")
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


              const selects= document.getElementsByTagName("select") 
               for(let select of  selects){
                select.addEventListener("keyup",function(event){
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
               document.getElementById("form-inscription").addEventListener("submit",function(event){
                   let valid=true;
                  for(let select of  selects){
                      if(!select.value.trim()){
                            valid=false
                            //Verifie si  l'attribut error existe dans le input
                            if(select.hasAttribute("error")){
                                 //recuperer la valeur de l'attribut error
                                    let idSmall=select.getAttribute("error")
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
