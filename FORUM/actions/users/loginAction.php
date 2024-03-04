<?php

require('actions/database.php');

// Validation du formulaire
if(isset($_POST['valider'])){

    if(!empty($_POST['pseudo']) AND !empty($_POST['motdepasse'])){

        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_motdepasse = htmlspecialchars($_POST['motdepasse']);

        $checkIfUserExists = $connexion->prepare('SELECT * FROM users WHERE pseudo = ?');
        $checkIfUserExists->execute(array($user_pseudo));

        if($checkIfUserExists->rowCount() > 0){

            $usersInfos = $checkIfUserExists->fetch();
            if(password_verify($user_motdepasse, $usersInfos['motdepasse'])){

                // Authentifier le users sur le site
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $usersInfos['id'];
                $_SESSION['nom'] = $usersInfos['nom'];
                $_SESSION['prenom'] = $usersInfos['prenom'];
                $_SESSION['pseudo'] = $usersInfos['pseudo'];
                
                header('Location: index.php');

            }else{
                $errorMsg = "votre mot de passe est incorrect...";
            }

        }else{
                $errorMsg = "votre pseudo est incorrect...";
            }
              
    }else{
         $errorMsg = "veuillez remplir tous les champs...";
    }

}
