<?php
function poster() { //Fonction -> Poster nouveau chapitres
    global $bdd;
    
    extract($_POST);
    
    $validation = true;
    $erreurs = [];
    
    if(empty($titre) || empty($numero) || empty($contenu)) { //Si champs non rempli
        $validation = false;
        $erreurs[] = "Tous les champs sont obligatoires";
    }
    
    if($validation) {  //Validation des champs
        $poster = $bdd->prepare("INSERT INTO chapitres(numero, titre, accroche, contenu) VALUES(:numero, :titre, :accroche, :contenu)");
        $poster->execute([
            "numero" => htmlentities($numero),
            "titre" => htmlentities($titre),
            "accroche" => substr(htmlentities($contenu), 0, 200),
            "contenu" => nl2br(htmlentities($contenu))
        ]);
        
        unset($_POST["numero"]);
        unset($_POST["titre"]);
        unset($_POST["contenu"]);
    }
    
    return $erreurs;
    
}//Fin fonction poster()



function posts() { //Fonction -> Récupération des posts dans admin/posts
    global $bdd;
    
    $posts = $bdd->query("SELECT id, numero, titre FROM chapitres ORDER BY id DESC"); //Récupération : id & titre dans la table chapitres dans l'odre descroissant
    $posts = $posts->fetchAll();
    
    return $posts;

}//Fin fonction posts()



function post() {
    global $bdd;
    
    $id = (int)$_GET["id"]; //Garantir l'intégrité de l'ID
    
    $post = $bdd->prepare("SELECT numero, titre, contenu FROM chapitres WHERE id = ?");
    $post->execute([$id]);
    $post = $post->fetch();
    
    return $post;
    
}//Fin fonction post();




function supprimer() {
    global $bdd;
    
    $id = (int)$_GET["id"]; //Garantir l'intégrité de l'ID
    
    $supprimer = $bdd->prepare("DELETE FROM chapitres WHERE id = ?"); //Suppression du chapitre
    $supprimer->execute([$id]);

}//Fin fonction supprimer()



function modifier() {
    global $bdd;
    
    $erreur = "";
    
    extract($_POST);
    
    $id = (int)$_GET["id"]; //Garantir l'intégrité de l'ID
    
    if(!empty($numero) AND !empty($titre) AND !empty($contenu)) {
        $modifier = $bdd->prepare("UPDATE chapitres SET numero = :numero, titre = :titre, accroche = :accroche, contenu = :contenu WHERE id = :id");
        $modifier->execute([
            "id" => $id,
            "numero" => htmlentities($numero),
            "titre" => htmlentities($titre),
            "accroche" => substr(htmlentities($contenu), 0, 200),
            "contenu" => nl2br(htmlentities($contenu)) 
        ]);
    }
    else
        $erreur .= "Les champs doivent etre rempli";
    
    return $erreur;
}//Fin fonction modifier()







