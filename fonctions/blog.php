<?php

function chapitres() { //Fonction pour la récupération des élements chapitres du tableau MySQL
    global $bdd;
    
    //Selection des élements chapitres du tableau MySQL
    $chapitres = $bdd->query("SELECT id, numero, titre, accroche FROM chapitres ORDER BY id DESC"); //ORDER BY id DESC -> Affichage dans l'ordre descroissant
    $chapitres = $chapitres->fetchAll(); //Preparation gestion de l'affichage des chapitres
    
    return $chapitres; 
}//Fin fonction chapitres()



function chapitre() { //Affichage des chapitres au détail -> PAGE chapitres.php
    global $bdd;
    
    $id = (int)$_GET["id"]; //Récupération variable d'URL
    
    $chapitre = $bdd->prepare("SELECT id, numero, titre, contenu FROM chapitres WHERE id = ?");
    $chapitre->execute([$id]); 
    $chapitre = $chapitre->fetch();
    
    //Condition pour l'intégration des articles
    if(empty($chapitre))  //Si variable chapitre est vide = id pas bon
       header("location: index.php"); //Utilisateur reconduit sur page d'accueil 
    else 
       return $chapitre; // Sinon affiche le chapitre
}//Fin fonction chapitre()



function nb_commentaires() { //Affichage du nombre de commentaires
    global $bdd;
    
    $id_chapitre = (int)$_GET["id"];
    
    $nb_commentaires = $bdd->prepare("SELECT COUNT(*) FROM commentaires WHERE id_chapitre = ?");
    $nb_commentaires->execute([$id_chapitre]);
    $nb_commentaires = $nb_commentaires->fetch()[0];
    
    return $nb_commentaires;
}//Fin fonction nb_commentaires()



function commentaires() { //Affichage des commentaires
    global $bdd;
    
    $id_chapitre = (int)$_GET["id"];
    $commentaires = $bdd->prepare("SELECT commentaires.*, membre.pseudo FROM commentaires INNER JOIN membre ON commentaires.id_membre = membre.id AND commentaires.id_chapitre = ?");
    $commentaires->execute([$id_chapitre]);
    $commentaires = $commentaires->fetchAll();
    
    return $commentaires;
}//Fin fonction commentaires



function recherche() { //Permet de faire une recherche de chapitres
    global $bdd;
    
    extract($_POST);
    
    $recherche = $bdd->prepare("SELECT id, numero, titre, accroche, contenu FROM chapitres WHERE numero LIKE :query OR titre LIKE :query OR contenu LIKE :query ORDER BY id DESC");
    $recherche->execute([
        "query" => '%' . $query . '%'
    ]);
    $recherche = $recherche->fetchAll();
    
    return $recherche;
}//Fin fonction recherche()



function commentaires_user() { //Commentaires dans Compte utilisateur
    global $bdd;
    
    $commentaires = $bdd->prepare("SELECT commentaires.*, chapitres.titre FROM commentaires INNER JOIN chapitres ON commentaires.id_chapitre = chapitres.id AND commentaires.id_membre = ?");
    $commentaires->execute([$_SESSION["membre"]]);
    $commentaires = $commentaires->fetchAll();
    
    return $commentaires;    
}//Fin fonction commentaires_user()



function commenter() {
    if(isset($_SESSION["membre"])) { //Si session membre -> commentaire possible
        global $bdd;
    
        $erreur = "";
        
        extract($_POST); //Extract Post
    
        if(!empty($commentaire)) {
           $id_chapitre = (int)$_GET["id"];    
            
           $commenter = $bdd->prepare("INSERT INTO commentaires(id_membre, id_chapitre, commentaire) VALUES(:id_membre, :id_chapitre, :commentaire)");
           $commenter->execute([
               "id_membre" => $_SESSION["membre"],
               "id_chapitre" => $id_chapitre,
               "commentaire" => nl2br(htmlentities($commentaire))
           ]);
        }
        else
            $erreur .= "Vous devez écrire du texte";
        
        return $erreur;
    }
}//Fin fonction commenter();



function time_publication($post_time) { //Affichage date commentaire façon "Facebook"
    $temps_ecoule = time() - $post_time; //le TIME STAMP ACTUEL :time() - le temps ecoulé
    
    if($temps_ecoule <1) {
        return "0 seconde";
    }
    
    $tab = array(
      12*30*24*60*60 => "Année",
      30*24*60*60 => "Mois",
      24*60*60 => "Jour",
      60*60 => "Minute",
      1 => "Seconde"    
    );
    
    foreach($tab as $secs => $str) {
        $actuel = $temps_ecoule / $secs;
        if($actuel >= 1) {
            $actuel = round($actuel);
            return $actuel.' '.$str.($actuel > 1 && substr($str, -1)!='s'?'s':'');
        }
    }
}//Fonction time()


