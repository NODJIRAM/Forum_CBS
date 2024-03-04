<?php
    session_start();
    require('actions/users/securityAction.php');
?>
<?php $host = "http://".$_SERVER['HTTP_HOST']; $root = $_SERVER['DOCUMENT_ROOT']; ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="welcome/index.css">
    <title>CBS-Tchad</title>
</head>

<body>

    <header>
        <nav>
            <a href="#"><img src="welcome/images.jpg" alt="logo" class="logo"></a>
            <ul>
                <li><a href="http://iuc.cefod-tchad.org/index.php/contact">Accueil</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Actualités</a></li>
                <li><a href="#">A propos</a></li>
            </ul>
            <img src="welcome/images.jpg" alt="" class="menu-icon">
        </nav>
    </header>

    <section class="text">
        <h1>Bienvenue.....<br><span class="auto-typing"></span></h1>
        <p>Le CEFOD Business School (CBS), institut universitaire du CEFOD (Ndjamena),<br> 
        reconnu par le Ministère de l’Enseignement Supérieur, de la Recherche et de l’Innovation du Tchad <br> 
        (Agrément N°444/PR/PM/MESRS/SG/DGESRS/DESP/2014) s’inscrit dans une dynamique de croissance. <br> 
        Après trois années de fonctionnement, et dès la rentrée académique 2019, le CEFOD Business School entend ouvrir 
        de nouvelles filières de licence et  démarrer son cycle Master dans les domaines de la gestion, du management des organisations,
        du droit, de l’économie, du développement durable, et de la documentation.</p>

        <a href= "<?=$host;?>/Forum/login.php" id="connecter">se connecter</a> <a href= "<?=$host;?>/Forum/signup.php" class="new">Inscription</a>
    </section>

    <div class="overlay">

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed('.auto-typing', {
            strings: ['Au Centre d\'Etude de Formation pour le Développement', 'A l\'institut universitaire CBS', 'Bonne connexion'],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true,
            fadeOut: true,
            fadeOutClass: 'typed-fade-out',
            fadeOutDelay: 500,
            shuffle: true
        })
    </script>

</body>

</html>
