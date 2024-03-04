<?php

 require('actions/database.php');

 // Validation du formulaire
if(isset($_POST['valider'])){

    if(!empty($_POST['pseudo']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['motdepasse'])){

        // Stockage des données(pseudo, nom, prenom et password) utilisateurs récupérées dans des variables
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_nom = htmlspecialchars($_POST['nom']);
        $user_prenom = htmlspecialchars($_POST['prenom']);
        $user_motdepasse = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT);
        
        // Vérification pour voir si le users est déjà inscrit sur le site
        $checkIfUserAlreadyExists = $connexion->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
        $checkIfUserAlreadyExists->execute(array($user_pseudo));

        if($checkIfUserAlreadyExists->rowCount() == 0){
            // Inscription du users dans la base de données
            $insertUserOnWebsite = $connexion->prepare('INSERT INTO users(pseudo, nom, prenom, motdepasse)VALUES(?, ?, ?, ?)');
            // Execution de la requette avec les données de users
            $insertUserOnWebsite->execute(array($user_pseudo, $user_nom, $user_prenom, $user_motdepasse));
        
            // Authentifier le users avec son identifiant s'il a déjà un compte
            // Faire une requete pour récupérer les informations du user
            $getInfosOfThisUserReq = $connexion->prepare('SELECT id, pseudo, nom, prenom FROM users WHERE pseudo = ? AND nom = ? AND prenom = ?');
            $getInfosOfThisUserReq->execute(array($user_prenom, $user_nom, $user_pseudo));

            // Variable pour stocker les données récupérées
            $usersInfos = $getInfosOfThisUserReq->fetch();

            // Authentifier le users sur le site
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $usersInfos['id'];
            $_SESSION['nom'] = $usersInfos['nom'];
            $_SESSION['prenom'] = $usersInfos['prenom'];
            $_SESSION['pseudo'] = $usersInfos['pseudo'];

            // Rediriger le user vers la page d'accueil
            header('Location: index.php');

        }else{
            $errorMsg = "L'utilisateur est déjà inscrit sur le site";
        }

    }else{
         $errorMsg = "Veuillez remplir tous les champs...";
    }

}