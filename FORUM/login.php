<?php require('actions/users/loginAction.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<?php include 'includes/head.php' ?>

<body>

    <div class="forum">

        <div class="prof">
            <h1></h1>
        </div>

        <br>
        <div class="wrapper">
            <form action="" method="POST">
                <br>
                <?php
            if(isset($errorMsg)){
                echo '<p>'.$errorMsg.'</p>';
            }
        ?>
                <br>
                <h1>Se connecter au forum</h1>
                <div class="input-box">
                    <input type="text" name="pseudo" placeholder="veuillez entrer votre pseudo">
                </div>
                <div class="input-box">
                    <input type="password" name="motdepasse" placeholder="veuillez entrer votre mot de passe">
                </div>
                <div class="remember-forgot">
                    <!-- <label><input type="checkbox"> Remember me</label> -->
                    <a href="#"></a>
                </div>
                <button type="submit" name="valider" class="btn">Se connecter</button>
                <br><br>
                <div class="register-link">
                    <a href="signup.php" id="loginzoom"><strong><p>Je n'ai pas de compte, je m'inscris</p></strong></a>
                </div>
                <br>
            </form>
        </div>
    </div>

</body>

</html>