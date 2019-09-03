                     <!-- PHP --> 
       <?php
          session_start();
          
          require_once "fonctions/bdd.php"; //Require_once -> Si fichier pas present annule l'affichage du site
          include_once "fonctions/blog.php"; //Include_once -> charge 1 fois le blog

          $bdd = bdd(); //Execution de la fonction bdd()
          
          if(!empty($_POST)) //RECHERCHE -> Si le POST de <input> est rempli 
              $chapitres = recherche();
          else //Sinon affichage normal -> fonction chapitres()
              $chapitres = chapitres();
       ?>


                     <!-- DOCTYPE html -->

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
  
  
 <title>Le blog de J.Forteroche</title>
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="ico/favicon-grand.png"> 
  <!-- BALISES Link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- BALISE Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,900" rel="stylesheet"> 
  <!-- BALISE FontAwesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  
  <!-- BALISE Style -->
  <link rel="stylesheet" href="css/accueil.css">
    
  
</head>
<body>
                              <!-- HEADER -->
   
   <header>
     <div class="bloc-header">
       <img class="image-header" src="css/img/alaska.jpg" alt= "Photo de l'alaska et Couverture du livre: Billet simple pour l'Alaska."/>
       <img class="logo-header" src="css/img/logo-header.png" alt= "Logo du blog de Jean Forteroche." />
       <a href="connexion.php">
           <div id="bouton-connexion" class="bouton-connexion">
             <p class="text-bouton-connexion">connexion</p>
             <div class="bouton-connexion-trait"></div>
           </div>
       </a>
       <div class="bouton-accueil">
         <a href="index.php"><p class="text-bouton-accueil">accueil</p></a>
         <div class="bouton-accueil-trait"></div>
       </div>
       <div class="bandeau-citation">
           <ul class="citation">
             <li class="phrase1">«Il se tenait debout, seul, face à l’immensité.»</li>
             <li class="phrase2">Billet Simple Pour l'Alaska</li>
           </ul>
       </div>
       <div class="icones-reseaux-header">
             <div class="icones-marge-header">
                <a href="https://plus.google.com/discover"><i class="fab fa-google-plus-g"></i></a>
                <a href="https://plus.google.com/discover"><p class="text-google-haut">Google</p></a>
             </div>
             <div class="icones-header">
                 <a href="https://twitter.com/login?lang=fr"><i class="fab fa-twitter"></i></a>
                 <a href="https://twitter.com/login?lang=fr"><p class="text-twitter-haut">Twitter</p></a>
             </div>
             <div class="icones-header">
                 <a href="https://fr-fr.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                 <a href="https://fr-fr.facebook.com/"><p class="text-facebook-haut">Facebook</p></a>
             </div>
             <span class="trait-vert"></span>
         </div>
       </div>    
   </header>
                        
                    <!-- SECTION/ Bienvenue Sur le Blog -->
                         
   <section class="bloc-bienvenue">
      <img class="text-bienvenue" src="css/img/phrase-bienvenue.png">
      <div class="bienvenue">
         <p class="para-bienvenue"><span class="lettre-bienvenue">S</span>uivez toute l’actu littéraire et découvrez le premier roman de l’acteur et écrivain <strong>Jean Forteroche</strong>. Plongez-vous dans l’univers et voyagez à travers l’atmosphère unique et moderne de son écriture.</p>
      </div>
   </section> 
                        
                        <!-- SECTION/ Bandeau E-book -->
                        
   <section>
      <div class="bandeau-book">
         <a href="css/img/couverture-Livre-grande.png" target="_blank">            
           <img class="book" src="css/img/couverture-Livre.png" alt= "Couverture du livre : Billet simple pour l'alaska, écrit par Jean Forteroche.">
         </a>
         <div class="book-citation">
           <ul class="book-text">
             <li class="book-phrase1">«Il se tenait debout, seul, face à l’immensité.»</li>
             <li class="book-phrase2">Billet Simple Pour l'Alaska</li>
           </ul>
         </div>
         <img class="text-image-book" src="css/img/phrase-bandeau-book.png" alt="Texte découverte du nouveau livre de Jean Forteroche.">
         <div id ="bouton-chapitres" class="bouton-chapitres">
             <a href="chapitres.php"><p class="text-bouton-chapitres">les chapitres du livre</p></a>
           <div class="bouton-chapitres-trait"></div>
         </div>
      </div>
   </section>
                   
               
                  
                  <!-- SECTION/ Les Derniers Chapitres -->
   
   <section>
     <div id="section-chapitres">
        <div class="container">
            <div class="row no-gutters">
               <div class="titre-chapitres">
                 <span class="trait-chapitres"></span>
                 <h1 class="text-titre-chapitres">les chapitres du livre</h1>
               </div>
               <p class="text-chapitres col-12">Retrouvez dés maintenant les chapitres de mon nouveau livre : <i>Billet Simple Pour l’Alaska</i>. L’ensemble de l’ouvrage est disponible en téléchargement sous format E-book. Cliquez sur les chapitres disponibles ci-dessous pour lire l'intégralité de l'ouvrage.</p>
            </div>
         </div>
         <form method="POST" action=""> <!-- PHP -> Recherche -->
            <div class="container"> 
              <div class="row no-gutters">
                 <div class="barre-recherche col-7">
                     <input class="onglet-recherche" type="text" name="query" placeholder ="Rechercher un chapitre..." value="<?php if(isset($_POST["query"])) echo $_POST["query"] ?>">
                     <input class="bouton-recherche" type="submit" value="OK">
                 </div>    
              </div>    
            </div>
         </form>
         <div class="container">
            <div class="row no-gutters">
               <?php
                foreach($chapitres as $chapitre) :
               ?> 
               <article> <!-- Derniers Chapitres -->
                   <div class="bloc-chapitres col-7">
                     <div class="numero-chapitres">
                       <p class="numero"><?= ($chapitre["numero"]) ?></p>
                     </div>
                     <h3 class="titre-chapitre"><?= $chapitre["titre"] ?></h3> 
                       <p class="debut-text"><?= $chapitre["accroche"] ?></p>
                     <button class="lire">
                        <a href="chapitres.php?id=<?= $chapitre["id"] ?>" class="text-lire">En Lire +</a>
                     </button>
                   </div>
               </article>   
               <?php
                endforeach;
               ?> 
             </div>
          </div> <!-- Fin container chapitres -->
      </div> <!-- Fin section-chapitres -->     
   </section>
                        
                          <!-- BOUTON -->
         <?php include_once("bouton.php"); ?>
                         
                          <!-- FOOTER -->
         <?php include_once("footer.php"); ?>
                    
                          
               <!-- JQUERY--> 
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
  </script>  
  
        <!-- JavaScript/ Bouton -->
  <script src="bouton.js"></script>
        <!-- JavaScript/ Main -->            
  <script src="main.js"></script>
         
  
  
  </body>
</html>
