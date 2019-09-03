      <?php
          session_start();

          if(isset($_SESSION["membre"])) //Si session memebre -> Connexion
              header("location: compte.php"); //Rediection vers le compte

          require_once "fonctions/bdd.php"; //Require_once -> Si fichier pas present annule l'affichage du site
          include_once "fonctions/membre.php"; //Include_once -> charge 1 fois le blog

          $bdd = bdd(); //Execution de la fonction bdd()
          
          if(!empty($_POST)) //RECHERCHE -> Si le POST de <input> est rempli 
              $erreurs = inscription(); //Erreurs avec fonction inscription()
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
  
  
  <title>J.Forteroche - Admin/ Inscription</title>
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="ico/favicon-grand.png"> 
  <!-- BALISES Link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- BALISE Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,900" rel="stylesheet"> 
  <!-- BALISE FontAwesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  
  <!-- BALISE Style -->
  <link rel="stylesheet" href="css/inscription.css">
    
  
</head>
<body>                                                     
                                                            
                                         
                           <!-- BLOC/ Inscription -->
      <div id="bloc-inscription" class="bloc-inscription">
             <img id ="ajout-informations" class="ajout-informations" src="css/img/indications-%20connexion.png">
             <div class="bloc-inscription-titre">
                <h2 class="titre-bloc-inscription">inscription</h2>
                <span class="trait-bloc-inscription"></span>    
             </div>
             <a href="index.php">
                 <div id="bouton-croix-inscription" class="bouton-fermer-inscription">
                    <img class="croix-bouton-inscription" src="css/img/croix-bouton.png">
                    <div class="trait-bouton-fermer-inscription">
                    </div>
                 </div>
             </a>
             <form class="champs-inscription" method="POST" action="">
                <?php
                if(isset($erreurs)) :  //Test si la fonction $erreur existe !
                if($erreurs) :  
                foreach($erreurs as $erreur) : 
                ?>  
                <div class="message-erreur">
                    <p class="text-erreur"><?= $erreur ?></p>
                </div>
                <?php
                endforeach; 
                else :
                ?> 
                <div class="message-confirmation">
                    <p class="text-confirmation">Votre inscription à bien été prise en compte !</p>
                </div>
                <?php
                endif; //Endif du if/else  
                endif; //Fin test fonction $erreur
                ?>
                
                <div class="inscription-champs">
                   <label class="label-inscription" for="username">*Pseudo :</label>
                   <input id="input-pseudo" class="input-inscription" type="text" name="pseudo" placeholder="Pseudo *" value="<?php if(isset($_POST["pseudo"])) echo $_POST["pseudo"] ?>" minlength="1" maxlength="50" size="45">
                </div>
                <div class="inscription-champs">
                   <label class="label-inscription" for="email">*E-mail :</label>
                   <input id="input-email" class="input-inscription" type="text" name="email" placeholder="Votre e-mail *" value="<?php if(isset($_POST["email"])) echo $_POST["email"] ?>" minlength="1" maxlength="50" size="45">
                </div>
                <div class="inscription-champs">
                   <label class="label-inscription" for="email">*Vérification de l' E-mail :</label>
                   <input id="input-emailconf" class="input-inscription" type="text" name="emailconf" placeholder="Confirmer votre e-mail *" value="<?php if(isset($_POST["emailconf"])) echo $_POST["emailconf"] ?>" minlength="1" maxlength="50" size="45">
                </div>
                <div class="inscription-champs">
                   <label class="label-inscription" for="password">*Mot de Passe :</label>
                   <input id="input-password" class="input-inscription" type="password" name="password" placeholder="Votre mot de passe *" minlength="1" maxlength="50" size="45">
                </div>
                <div class="inscription-champs">
                   <label class="label-inscription" for="password">*Vérification du Mot de Passe :</label>
                   <input id="input-passwordconf" class="input-inscription" type="password" name="passwordconf" placeholder="Confirmer votre mot de passe *" minlength="1" maxlength="50" size="45">
                </div>
                <div class="bouton-inscription-page">
                   <input id="bouton-page-inscription" class="bouton-page-inscription" type="submit"  value="valider">
                   <div class="bouton-page-inscription-trait"></div>
                </div>
             </form> 
        </div>
        
</body>
</html>
              
        
        
