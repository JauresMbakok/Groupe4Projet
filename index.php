<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="formulaire">
    <meta name="description" content="Renseigner ses information">
    <meta name = "author" content = "Groupe4">
 
    <link rel="stylesheet" href="assets\bootstrap\css\bootstrap.css">
    <link rel="stylesheet" href="assets\fonts\fontawesome\css\fontawesome-all.css">
    <link rel="stylesheet" href="assets\css\sticky-button-add-question.css">
    <link rel="stylesheet" href="assets\css\styles.css">
    <title>Formulaire</title>

</head>
<body>
      
    <!-- <?php
        require "formulaire.php"

    ?>        -->






    <div class="container">
         <!-- Notre corps de formulaire, il comporte les champs titre, le paragraphe, le titre de question, les question
        ,reponses, le type de question et  l'icone poubelle  -->

      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="assets\images\PP.jpg" alt="Photo de presentation"> 
         <h2>Formulaire de renseignement</h2>
        <i class="fa fa-whatsapp"></i>
         
        <p class="lead">Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.</p>
      </div>

       <div class="row"> 

             

            <div class= "col-lg-12"> 
                <div class="card">   
                   
                     <div class="card-body"> 
                     <div class="row">
                         <div class="col-lg-10">
                             <div class="pull-left">
                               <input type="text" class="form-control form-group"  id="questionform" placeholder="Titre" value="" required="">
                             </div>
                         </div>
                         <div class="col-lg-2">
                            <div class="pull-right">
                               <button class="btn btn-danger btn-rounded">
                                   <i class="fa fa-trash"></i>
                               </button>
                            </div>
                         </div>
                     </div>
                        <div class="row">
                            <div class= "col-lg-8">
                                <input type="text" class="form-control form-group"  id="questionform" placeholder=" votre question" value="" required="">
                            </div>
                            <div class= "col-lg-4">
                                
                                <select name="selectname" id="typeform" class="form-control form-group">  
                                    <option value=""  >Choisir une option</option>
                                    <option value=""> Text court</option>
                                    <option value="">Text long</option>
                                    <option value=""> Case à cocher</option>
                                    <option value=""> Choix multiples</option>
                                </select> 
                                
                                
                            </div>
                            <div class= "col-lg-12">
                            
                                <input type="textarea" class="form-control form-group" id="answerform" placeholder="votre reponse" value="" required="">
                            </div>
                        </div>
                        <div class="row">
                            
                                
                </div>
                                
                            
            </div>
                
            <span class="visually-hidden">Toggle Dropdown</span>
            <i class="bi bi-caret-down-fill"></i>

                        

       </div> <br> <br> <br>

            <!-- La div qui contient le bouton ENVOYER -->
                        <div class="row">
                            <div class="col-lg-12">
                            <input type="submit" value="Envoyer" class= "form-control form-group btn btn-primary" id= "submitbutton" >
                            </div>
                        </div>


            <!-- Le bouton ajouter une question -->
       <div class="wa__btn_popup">
                <div class="wa__btn_popup_txt">
                     <!-- Ajouter une question -->
                </div>
                <div class="wa__btn_popup_icon"></div>
            </div>

            <button  class="btn btn-success btn-rounded" style="height: 50px;"
                id="button-add-question"   >
                <i class="fa fa-plus"></i>
            </button>

        </div>


        
    <!-- les fichiers scripts -->
<script src="assets\js\jquery-3.6.0.min.js"></script>
<script src="assets\js\scripts.js"></script>
<script src=" assets\bootstrap\js\bootstrap.js"></script>
</body>
</html>