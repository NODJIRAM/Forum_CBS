<?php
    require('actions/questions/editQuestionAction.php');
    require('actions/users/securityAction.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>
</body>

<div class="forum">

    <div class="prof">
        <!-- <h1>Bienvenu au forum des enseignants</h1> -->
    </div>

    <div class="wrapper">
        <form action="" method="POST">
            <br>
            <?php
            if(isset($errorMsg)){
                echo '<p>'.$errorMsg.'</p>';
            }
        ?>
            <br>
            <h2>Objet de la question</h2>
            <div class="input-box">
                <input type="text" name="title" placeholder="titre de la question">
            </div>
            <div class="input-box">
                <textarea name="description" id="tetra" placeholder="description de la question"></textarea>
            </div>
            <br>
            <div class="input-box">
                <textarea name="content" id="tetra" rows="4" placeholder="contenu de la question"></textarea>
            </div>
            <br>
            <div class="remember-forgot">
                <!-- <label><input type="checkbox"> Remember me</label>
            <a href="#">Mot de passe oublié?</a> -->
            </div>
            <button type="submit" name="valider" class="btn">Modifier la question</button>
            <br><br>
            <div class="register-link">
                <!-- <a href="login.php"><p>J'ai déjà un compte, je me connecte</p></a> -->
            </div>
        </form>
    </div>
</div>

</html>