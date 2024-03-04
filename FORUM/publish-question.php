<?php  
    require('actions/questions/publishQuestionAction.php');
    require('actions/users/securityAction.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php' ?>

<body>
    
<br><br>
<div class="forum">

<div class="prof">
    <h1>Vous avez des questions? soyez libre, je suis l'IA du CBS</h1>
</div><br><br><br>

<div class="wrapper">
    <form action="" method="POST">
        <br> 
        <?php
            if(isset($errorMsg)){
                echo '<p>'.$errorMsg.'</p>';
            }elseif(isset($successMsg))
            echo '<p>'.$successMsg.'</p>';
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
        <button type="submit" name="valider" class="btn">Publier</button>
        <br><br><br>
        <div class="register-link">
            <!-- <a href="login.php"><p>J'ai déjà un compte, je me connecte</p></a> -->
        </div>
    </form>
</div>
</div>
    
</body>
</html>