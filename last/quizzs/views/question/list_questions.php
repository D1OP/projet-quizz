<div id="" class="d-flex justify-content-center align-items-center ">        
                        <div id="inscription-form" class="w-150 bgWhite container rounded  text-secondary py-2">
                            <div class="inscription-form-body row">
                                
                                
                                <div class="ml-3">                                                                                                                                       
                                            <form class="pr-5" id="form-question"  method="post">  
                                                <h7 class="ml-5"> Nbre de questions/jeu 
                                                    <input class="">    
                                                    <button type="submit"  class="btn btn-primary">OK</button>
                                                </h7>                                              
                                                <div class="form-group mb-1">                                                    
                                                    <label for="m" class="">1. Les langages Web</label>
                                                    <div class="ml-5">                               
                                                    <input name="mn" class="form-check-input position-static" type="checkbox"  id="mn" error="error_mn" > HTML
                                                    <small  class="text-danger" id="error_mn"></small>
                                                    </div>
                                                    
                                                <div class="ml-5">
                                                    <input class="form-check-input position-static" type="checkbox" > R
                                                    </div>
                                                    <div class="ml-5">
                                                    <input class="form-check-input position-static" id="m" type="checkbox" error_m> JAVA
                                                    <small  class="text-danger" id="error_m"></small>
                                                 </div>                                                   
                                                    <div class="form-group mb-1">
                                                        <label class="">2. D’où vient le Corona</label>
                                                        <div class="ml-5">
                                                            <input class="form-check-input position-static"id="mp" type="radio"error_mp > Italie
                                                            <small  class="text-danger" id="error_mp"></small>
                                                            </div>
                                                            <div class="ml-5">
                                                            <input class="form-check-input position-static" id="mo" type="radio" error_mo > Chine
                                                            <small  class="text-danger" id="error_mo"></small>
                                                        </div>
                                                    </div>                                                     
                                                <div class="form-group mb-1">
                                                    <label class="">3. Quelle est la première école de codage gratuite au Sénégal</label>
                                                    <div class="ml-5">
                                                    <input class="form-check-input position-static" id="mk"type="radio" error_mk> Simplon
                                                    <small  class="text-danger" id="error_mk"></small>
                                                    </div>
                                                    <div class="ml-5">
                                                        <input class="form-check-input position-static" id="ml" type="radio"error_ml > Orange Digital Center
                                                        <small  class="text-danger" id="error_ml"></small>
                                                        </div>
                                                </div> 
                                                <div class="form-group mb-1">
                                                    <label class="">4. Quel terme définit langage qui s’adapte sur Androïd et sur Ios?
                                                        </label>
                                                    <div class="ml-5">
                                                    <input class="form-check-input position-static" id="mu" type="input"error_mu >
                                                    <small  class="text-danger" id="error_mu"></small>
                                                    </div>                                                    
                                                <div class="form-group mb-1">
                                                    <label class="">5. Les précurseurs de la révolution digital</label>
                                                    <div class="ml-5">
                                                        <input class="form-check-input position-static" id="ma" type="radio"error_ma > GANFAM 
                                                        <small  class="text-danger" id="error_ma"></small>
                                                        </div>
                                                        <div class="ml-5">
                                                            <input class="form-check-input position-static" id="mz" type="radio" error_mz> CIA-FBI
                                                            <small  class="text-danger" id="error_mz"></small>
                                                            </div>
                                                </div> 

                                                <button type="submit" name="btn_submit" class="btn btn-primary">Suivant</button>
                        
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