<?php

    $serveur = "localhost";
    $login = "root";
    $password = "";
    $basename = "forum";

    try{
        session_start();
        $connexion = new PDO("mysql:host=$serveur;dbname=$basename;charset=utf8;", $login, $password);
        $connexion-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo 'Connexion réussie! Merci';
    }

    catch(Exception $e) {
        echo 'Echec de la connexion : ' .$e->getMessage();
    }

?>