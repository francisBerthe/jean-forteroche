<?php
function inscription() {
    global $bdd;
    
    extract($_POST);
    
    $validation = true;
    $erreur = [];
    
    if(empty($pseudo) || empty($email) || empty($emailconf) || empty($password) || empty($passwordconf)) { //Si rien dans les champs
        $validation = false;
        $erreur[] = "Tous les champs sont obligatoires"; //Message d'erreur
    }

    if(existe($pseudo)) { //Equivalent de if(existe == true)
        $validation = false; 
        $erreur[] = "Ce pseudo est déjà pris";
    }
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $validation = false;
        $erreur[] = "L'adresse e-mail n'est pas valide"; //Message d'erreur
    }
    elseif($emailconf != $email) { //Si email différent
        $validation = false; //Erreur
        $erreur[] = "L'adresse e-mail de confirmation est incorrecte"; //Message d'erreur
    }
    
    if($passwordconf != $password) { //Si mot de passe différent
        $validation = false; //Erreur
        $erreur[] = "Le mot de passe de confirmation est incorrecte"; //Message d'erreur
    }
    
    if($validation) { //Récuperation et insertion des inscription dans la $bdd
       $inscription = $bdd->prepare("INSERT INTO membre(pseudo, email, password) VALUES(:pseudo, :email, :password)"); 
       $inscription->execute([
           "pseudo" => htmlentities($pseudo), //Protection des données (eviter le code)
           "email" => htmlentities($email), //Protection des données (eviter le code)
           "password" => password_hash($password, PASSWORD_DEFAULT) //Transformation du password
       ]);
        
       unset($_POST["pseudo"]); //Supprime la variable avec Unset.
       unset($_POST["email"]);  //Supprime la variable avec Unset.
       unset($_POST["emailconf"]); //Supprime la variable avec Unset.   
    }
    
    return $erreur;

}//Fin fonction inscription()



function existe($pseudo) {
    global $bdd;
    
    $resultat = $bdd->prepare("SELECT COUNT(*) FROM membre WHERE pseudo = ?");
    $resultat->execute([$pseudo]);
    $resultat = $resultat->fetch()[0];
    
    return $resultat;
}//Fin fonction existe()


function connexion() { //Connexion du membre
    global $bdd;

    extract($_POST);

    $erreur = "Les identifiants sont erronés"; //variable erreur

    $connexion = $bdd->prepare("SELECT id, password FROM membre WHERE pseudo = ?");
    $connexion->execute([$pseudo]);
    $connexion = $connexion->fetch();

    //Verifie que le "MDP" -> meme entre formulaire & celui de la table
    if(password_verify($password, $connexion["password"])) { //Parametres : MDP formulaire & MDP table
        $_SESSION["membre"] = $connexion["id"];
        header("Location: compte.php");
    } else
    return $erreur; //Retourne la variable erreur si MDP incorrect
}//Fin fonction connexion()



function deconnexion() { //Deconnexion du membre
    unset($_SESSION["membre"]); //Suppression de la session
    session_destroy(); //Destruction de la session de maniére global
    header("location: index.php"); //Redirection vers connexion.php
}//Fin fonction deconnexion()



function infos() {
    global $bdd;
    
    $membre = $bdd->prepare("SELECT pseudo, email FROM membre WHERE id = ?");
    $membre->execute([$_SESSION["membre"]]);
    $membre = $membre->fetch();
    
    return $membre;
}//Fin fonction infos()