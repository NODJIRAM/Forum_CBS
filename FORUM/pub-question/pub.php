<?php $host = "http://".$_SERVER['HTTP_HOST']; $root = $_SERVER['DOCUMENT_ROOT']; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institut Universitaire</title>
    <link rel="stylesheet" href="pub.css">
</head>

<body>
    <header>
        <h1>Institut Universitaire</h1>
        <nav>
            <ul>
                <li><a href="#">Publier une question</a></li>
                <li><a href="#">Programmes d'Études</a></li>
                <li><a href="#">Admissions</a></li>
                <li><a href="#">À Propos</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="intro">
            <h2>Bienvenue à l'Institut Universitaire</h2>
            <p>Découvrez nos programmes de qualité et notre environnement d'apprentissage exceptionnel.</p>
            <a href="#" class="btn">En savoir plus</a>
        </section>

        <section id="events">
            <h3>Événements à Venir</h3>
            <p>Restez à jour avec nos événements et conférences.</p>
            <a href="#" class="btn">Voir Événements</a>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Institut Universitaire. Tous droits réservés.</p>
    </footer>
</body>

</html>

