<?php

//Fonction -> Connexion vers la bdd
function bdd() {
    try { //Essai connexion à la base de donnée
        $bdd = new PDO("mysql:dbname=blog jean forteroche; host=localhost", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')); //Array pour éviter les caractéres speciaux !  
    } catch (PDOException $e) { //Si probléme -> connexion
        echo 'Connexion échouée : ' . $e->getMessage(); //Message personnalisé
    }//Fin try
    
    return $bdd;
}//Fin fonction bdd()