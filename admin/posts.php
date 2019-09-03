                             <!-- POSTS --> 
         <?php
              require_once "../fonctions/bdd.php"; //Require_once -> Si fichier pas present annule l'affichage du site
              include_once "../fonctions/admin.php"; //Include_once -> charge 1 fois le blog
              
              $bdd = bdd(); //Execution de la fonction bdd()
              $posts = posts(); //Execution de la fonction posts()
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
  
  
  <title>J.Forteroche - Admin/ Posts</title>
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="ico/favicon-grand.png"> 
  <!-- BALISES Link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- BALISE Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,900" rel="stylesheet"> 
  <!-- BALISE FontAwesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  
  <!-- BALISE Style -->
  <link rel="stylesheet" href="css/posts.css">
    
  
</head>
<body>

                        <!-- HEADER/ Menu Administration -->
   
      <header>
         <div class="bloc-header">
            <!-- HEADER/ Menu Page Mentions & Page Chapitres --> 
             <?php include_once("menu-admin.php"); ?>          
         </div>                
      </header> 
      
                   <!-- SECTION/ Administration -->
      <section>
          <div class="container">
              <h1 class="text-administration">Bienvenue dans la partie <br> <span class="maj">Administration</span></h1>
              <h2 class="text-ancien"><i class="fas fa-sticky-note"></i> Ancien Posts </h2>
              <table class="ecart">
                  <?php
                  foreach($posts as $post) :
                  ?>
                  <tr class="tr">
                      <td class="td-numero"><?= $post["numero"] ?></td>
                      <td class="td-titre"><?= $post["titre"] ?></td>
                      <td class="td-crayon"><a href="modifier.php?id=<?= $post["id"] ?>"> <i class="fas fa-pencil-alt"></i> </a></td>
                      <td class="td-gomme"><a href="supprimer.php?id=<?= $post["id"] ?>"> <i class="fas fa-eraser"></i> </a></td>
                  </tr>
                  <?php
                  endforeach;
                  ?>
              </table>
          </div>  
          <div class="ecart"></div>
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
  