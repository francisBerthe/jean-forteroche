                     <!-- CHAPITRE --> 
       <?php
          session_start();
          
          require_once "fonctions/bdd.php"; //Require_once -> Si fichier pas present annule l'affichage du site
          include_once "fonctions/blog.php"; //Include_once -> charge 1 fois le blog
          include_once "fonctions/membre.php"; //Include_once -> charge 1 fois le blog

          $bdd = bdd(); //Execution de la fonction bdd()
          $chapitre = chapitre();
          $nb_commentaires = nb_commentaires();
          $commentaires = commentaires();
              
          if(!empty($_POST)) //RECHERCHE -> Si le POST de <input> est rempli 
              $erreur = commenter(); //Erreur avec fonction commenter()
       ?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- META Description -->
  <meta name="identifier-url" content="http://jean-forteroche.francis-berthe.fr/">
  <meta name="title" content="Blog du livre : Billet Simple pour L'Alaska">
  <meta name="description" content="Bienvenue sur le blog de Jean Forteroche, découvrez son premier roman 
                                    et suivez toute l’actu littéraire.">
  <meta name="author" content=" Berthe Francis">
  <meta name="publisher" content=" Berthe Francis">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <!-- OPEN GRAPH Meta -->
  <meta property="og:title" content="Blog du livre : Billet Simple pour L'Alaska"/>
  <meta property="og:type" content="Blog" />
  <meta property="og:url" content="http://jean-forteroche.francis-berthe.fr/" />
  <meta property="og:image" content="http://example.com/image.jpg" />
  <meta property="og:description" content="Bienvenue sur le blog de Jean Forteroche, découvrez son premier roman 
                                           et suivez toute l’actu littéraire.">
  
  
  <title>J.Forteroche - Les Chapitres</title>
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="ico/favicon-grand.png"> 
  <!-- BALISES Link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- BALISE Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,900" rel="stylesheet"> 
  <!-- BALISE FontAwesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  
  <!-- BALISE Style -->
  <link rel="stylesheet" href="css/chapitres.css">
    
  
</head>
<body>
        
                           <!-- HEADER -->
   
  <header>
     <div class="bloc-header">
        <!-- HEADER/ Menu Page Mentions & Page Chapitres --> 
         <?php include_once("menu.php"); ?>          
     </div>                
  </header>    
                    
                    <!-- SECTION/ Les Chapitres -->

   <section>
     <div class="chapitres-book">
       <div class="container">
         <div class="row no-gutters">
              <div class="titre-chapitres">
                <span class="trait-chapitres"></span>
                <h1 class="text-titre-chapitres">Billet simple pour l'alaska</h1>
              </div>
              <p class="text-chapitres col-12">Retrouvez dés maintenant les chapitres de mon nouveau livre : <i>Billet Simple Pour l’Alaska</i>. L’ensemble de l’ouvrage est disponible en téléchargement sous format E-book.</p>
          </div>  
       </div>
       <article> <!-- Chapitres -->
           <div class="container">
              <div class="row no-gutters">
                 <div class="bloc-chapitres col-md-6">
                   <div class="numero-chapitres">
                      <p class="numero"><?= $chapitre["numero"] ?></p>
                   </div>
                   <h3 class="titre-chapitre"><?= $chapitre["titre"] ?></h3> 
                 </div>
              </div>  
           </div> 
           <div class="container">
             <div class="row no-gutters">
                  <div class="pages-livre">
                    <p class="pages-paragraphes"><?= $chapitre["contenu"] ?></p>
                  </div>
             </div>  
           </div>
       </article>
     </div>
   </section>
    
                     <!-- SECTION/ Commentaires -->                  
   <section>
       <?php
         if(isset($_SESSION["membre"])) :
       ?>
       <div class="bloc-commentaires">
          <div class="bloc-commentaires-titre">
              <h2 class="titre-bloc-commentaires">commentaires(<?= $nb_commentaires ?>)</h2>
              <span class="trait-bloc-commentaires"></span> 
              <p class="text-commentaires">Donnez votre avis en laissant un commentaire.<br><span class="text-commentaires2">*Tous les champs sont obligatoires.</span></p>   
          </div>
         <form id="champs-commentaires" method="post" action="">
              <?php
              if(isset($erreur)) :
              if($erreur) :
              ?>
                  <div class="message-erreur">
                      <div class="text-erreur"><?= $erreur ?></div>
                  </div>
              <?php
              else :
              ?>
                  <div class="message-confirmation">
                      <div class="text-confirmation">Votre commentaire a bien été posté !</div>
                  </div>
             <?php
              endif;
              endif;
             ?>
             <div class="champs">
                <label for="commentaire" class="label-commentaires">*Votre commentaire :</label>
                <textarea id="partie-commentaire" class="partie-commentaire" name="commentaire"></textarea>
             </div>
             <div class="champs">
                <input id="bouton-envoyer-chapitres" class="bouton-envoyer" type="submit"  value="Envoyer">
                <div class="bouton-envoyer-trait"></div>
             </div>
          </form>
          <span class="trait-bas-commentaire"></span>
       </div>
       <?php
       endif;
       ?>
       
       <div class="commentaires">    
          <?php  //PHP -> Affichage des Commentaires 
          foreach($commentaires as $commentaire) :
          ?> 
          <div class="commentaire-auteur">
             <div class="nom-auteur">
                <div class="avatar">
                    <p class="text-avatar">:-)</p>
                </div>
                <p class="auteur"><?= $commentaire["pseudo"] ?></p>
                <p class="date">Publié il y a <?= time_publication(strtotime($commentaire["date"])) ?></p>
             </div>
             <p class="commentaire"><?= $commentaire["commentaire"] ?></p>
             <div class="signaler">
                <input class="bouton-signaler" type="submit" value="signaler">
             </div>
             <hr class="separation-commentaire">
          </div>
          <?php
          endforeach;
          ?>
       </div>
    </section>                      
                        
                          <!-- BOUTON -->
         <?php include_once("bouton.php"); ?>
                         
                          <!-- FOOTER -->
         <?php include_once("footer.php"); ?>
     
     
     <!-- JavaScript/ Bouton -->
  <script src="bouton.js"></script>
     <!-- JavaScript/ Main -->            
  <script src="main.js"></script>

</body>
</html>
  
  