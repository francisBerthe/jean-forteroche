                             <!-- COMPTE --> 
         <?php
              session_start(); //Pour utiliser les session (a mettre au debut)
              if(!isset($_SESSION["membre"])) //Si pas de session membre
                  header("location: connexion.php"); //Redirection vers connexion.php
              
              require_once "fonctions/bdd.php"; //Require_once -> Si fichier pas present annule l'affichage du site
              include_once "fonctions/membre.php"; //Include_once -> charge 1 fois le blog
              include_once "fonctions/blog.php"; //Include_once -> charge 1 fois le blog
              
              $bdd = bdd(); //Execution de la fonction bdd()

              $infos = infos(); //Récupération d'infos avec la fonction infos()
              $commentaires = commentaires_user(); //Récupération des commentaires avec la fonction : commentaires_user()
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
  
  
  <title>J.Forteroche - Mon Compte</title>
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="ico/favicon-grand.png"> 
  <!-- BALISES Link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- BALISE Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,900" rel="stylesheet"> 
  <!-- BALISE FontAwesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  
  <!-- BALISE Style -->
  <link rel="stylesheet" href="css/compte.css">
    
  
</head>
<body>
        
                         <!-- HEADER -->
   
  <header>
     <div class="bloc-header">
       <div class="fond-menu">
          <img class="logo-header" src="./css/img/logo-header.png" alt= "Logo du blog de Jean Forteroche." />
          <div id="bouton-deconnexion" class="bouton-deconnexion">
              <p class="text-bouton-deconnexion"><a href="deconnexion.php">déconnexion</a></p>
             <div class="bouton-deconnexion-trait"></div>
          </div>
          <div class="bouton-accueil">
             <a href="index.php"><p class="text-bouton-accueil">accueil</p></a>
             <div class="bouton-accueil-trait"></div>
          </div>
       </div>
     </div>    
  </header> 
                           
        <!-- SECTION/ Compte Utilisateur & Espace Membre -->                  
  <section>
       <div class="bloc-compte">
           <h2 class="text-bienvenue">Bienvenue <?= $infos["pseudo"] ?></h2>
           <p class="text-mail-membre"><span class="text-mail-capitale"> Adresse mail : </span><i><?= $infos["email"] ?></i></p>
           <h2 class="text-dernier-commentaire">Mes Derniers Commentaires !</h2>
       </div>
       
      <?php
      foreach($commentaires as $commentaire) :
      ?>
      <div class="commentaires">
          <div class="commentaire-auteur">
             <div class="nom-auteur">
                <p class="date">Posté sur le chapitre "<?= $commentaire["titre"] ?>",il y a "<?= time_publication(strtotime($commentaire["date"])) ?>"</p>
             </div>
             <p class="commentaire"><?= $commentaire["commentaire"] ?></p>
             <hr class="separation-commentaire">
          </div>
      </div>
      <?php
      endforeach;
      ?>
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
  
  