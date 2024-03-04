<?php
    require('actions/questions/myQuestionsAction.php');
    require('actions/users/securityAction.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/headQuestion.php' ?>


<body>
<?php include 'includes/navbar.php' ?>

    <br><br>
    <div class="container">

        <?php 

            while($question = $getAllMyQuestions->fetch()){
                ?>
                <div class="drap">
                    <h5>
                        <?php $question['titre']; ?>
                    </h5>
                    <div class="card-body">
                        <p class="card-text">
                            <?php $question['description']; ?>
                        </p><br>
                        <a href="#" class="btn1">Accéder à la question</a>
                        <a href="#" class="btn1">Modifier la question</a>
                    </div>
                </div>
                <br><br>
                <?php
            }
        ?>
    </div>
    
</body>

</html>