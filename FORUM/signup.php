<!-- Inclusion de la page signupActions -->
<?php  require('actions/users/signupAction.php'); ?>

<!DOCTYPE html>
<html lang="fr">


<!-- pour inclure la page de head avec l'instruction include -->
<?php 
    include 'includes/head.php';


    include 'includes/navbar.php';
?>


<!-- Insertion de la page section_forum avce include -->
<!-- Corps de la section forum pour se connecter -->

<div class="forum">

    <div class="prof">
        <h1>Bienvenu au forum des enseignants</h1>
    </div>
    <br>
    <div class="wrapper">
        <form action="" method="POST">
            <br>
            <strong>
            <?php
                if(isset($errorMsg)){
                    echo '<p>'.$errorMsg.'</p>';
                }
            ?>
            </strong>
            <br>

            <h1>S'inscrire au forum</h1>
            <div class="input-box">
                <input type="text" name="pseudo" placeholder="veuillez entrer votre pseudo">
            </div>
            <div class="input-box">
                <input type="text" name="nom" placeholder="veuillez entrer votre nom">
            </div>
            <div class="input-box">
                <input type="text" name="prenom" placeholder="veuillez entrer votre prénom">
            </div>
            <div class="input-box">
                <input type="password" name="motdepasse" placeholder="veuillez entrer votre mot de passe">
            </div>
            <div class="remember-forgot">
                <!-- <label><input type="checkbox"> Remember me</label>
                <a href="#">Mot de passe oublié?</a> -->
            </div>
            <button type="submit" name="valider" class="btn">Se connecter</button>
            <br><br>
            <div class="register-link">
                <a href="login.php"><strong><p>J'ai déjà un compte, je me connecte</p></strong></a>
            </div>
            <br>
        </form>
    </div>
</div>
   
    
</body>



</html>