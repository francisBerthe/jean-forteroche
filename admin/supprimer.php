<?php

require_once "../fonctions/bdd.php"; //Require_once -> Si fichier pas present annule l'affichage du site
include_once "../fonctions/admin.php"; //Include_once -> charge 1 fois le blog
$bdd = bdd(); //Execution de la fonction bdd()
supprimer(); //Execution fonction supprimer() = Pas besoin de variable
   

header("Location: posts.php");