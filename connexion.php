          <?php
              session_start();
 
              if(isset($_SESSION["membre"])) //Si session membre -> connexion
                  header("location: compte.php"); //Redirection vers compte.php

              require_once "fonctions/bdd.php"; //Require_once -> Si fichier pas present annule l'affichage du site
              include_once "fonctions/membre.php"; //Include_once -> charge 1 fois le blog

              $bdd = bdd(); //Execution de la fonction bdd()

              if(!empty($_POST)) //RECHERCHE -> Si le POST de <input> est rempli 
                  $erreur = connexion(); //Erreurs avec fonction connexion()
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
  
  
  <title>J.Forteroche - Connexion</title>
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="ico/favicon-grand.png"> 
  <!-- BALISES Link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- BALISE Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,900" rel="stylesheet"> 
  <!-- BALISE FontAwesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  
  <!-- BALISE Style -->
  <link rel="stylesheet" href="css/connexion.css">
    
  
</head>
<body>                                                     
                                                        

                  <!-- BLOC/ Connexion -->
            
        <div id="bloc-connexion" class="bloc-connexion">
             <img id ="ajout-informations" class="ajout-informations" src="css/img/indications-%20connexion.png">
             <div class="bloc-connexion-titre">
                <h2 class="titre-bloc-connexion">connexion</h2>
                <span class="trait-bloc-connexion"></span>    
             </div>
             <a href="index.php">
                 <div id="bouton-croix" class="bouton-fermer-connexion">
                    <img class="croix-bouton" src="css/img/croix-bouton.png">
                    <div class="trait-bouton-fermer">
                    </div>
                 </div>
             </a>          
                        <!-- connexion/ Formulaire Connexion -> Messages d'erreurs -->
             <form class="champs-connexions" action="" method="POST">
                <?php
                if(isset($erreur)) :  //Test si la fonction $erreur existe !
                ?>  
                <div class="message-erreur">
                    <p class="text-erreur"><?= $erreur ?></p>
                </div>
                <?php
                endif; //Fin test fonction $erreur
                ?>
                      <!-- connexion/ Formulaire Connexion Part -->
                <div class="connexion-champs">
                   <label class="label-pseudo" for="pseudo">*Identifiant :</label>
                   <input id="input-username" class="input-connexion" type="text" name="pseudo" placeholder="Votre identifiant" value="<?php if(isset($_POST["pseudo"])) echo $_POST["pseudo"] ?>" minlength="1" maxlength="20" size="25">
                </div>
                <div class="connexion-champs">
                   <label class="label-password" for="password">*Mot de passe :</label>
                   <input id="input-password" class="input-connexion" type="password" name="password" placeholder="Votre mot de passe" minlength="1" maxlength="20" size="25">
                </div>
                <div class="bouton-connexion-page">
                   <input id="bouton-page-connexion" class="bouton-page-connexion" type="submit"  value="Connexion">
                   <div class="bouton-page-connexion-trait"></div>
                </div>
                   <a href="inscription.php"><p id="inscription" class="inscription">Inscription</p></a>    
             </form> 
         </div>
         
</body>
</html>
          
         
      