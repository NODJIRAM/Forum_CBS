<?php 

require('actions/database.php');

if(isset($_POST['valider'])){

    // vérifier si les champs(title, description et content) ne sont pas vide
    if(!empty($_POST['title']) AND !empty($_POST['description']) AND !empty($_POST['content'])){

        // stockage des données saisies par le users dans ces variables suivantes
        $question_title = htmlspecialchars($_POST['title']);
        // le "nl2br" c'est pur permettre le saut de ligne ou cas le users souhaite revenir à la ligne
        $question_description = nl2br(htmlspecialchars($_POST['description']));
        $question_content = nl2br(htmlspecialchars($_POST['content']));
        $question_date = date('d/m/Y');
        $question_id_author = $_SESSION['id'];
        $question_pseudo_author = $_SESSION['pseudo'];

        // insertion des données dans la base de données 
        $insertQuestionOnWebsite = $connexion->prepare('INSERT INTO questions(titre, description, contenu, id_auteur, pseudo_auteur, date_publication) VALUES(?, ?, ?, ?, ?, ?)');
        $insertQuestionOnWebsite->execute(
            array(
                $question_title, 
                $question_description, 
                $question_content, 
                $question_id_author, 
                $question_pseudo_author,
                $question_date
                )
            );
            $successMsg = "votre question a bien été publiée sur le site";

    }else{
        // si les champs sont vide alors affiche ce message d'erreur
        $errorMsg = "veuillez compléter tous les champs";
    }



}