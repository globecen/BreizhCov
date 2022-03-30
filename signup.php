<?php require('actions/signupAction.php') ?>
<!DOCTYPE html>
<html lang="fr">
<?php include 'head.php'?>
<?php include 'style.php'?>
<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-9">
                <form class="container" method="POST">

                    <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';}?>

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Nom" name="nom">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Prénom" name="prenom">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Mot de passe" name="motDePasse">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Mail" name="mail">
                    </div>

                    <button type="submit" class="btn btn-lg btn-primary" name="validate">S'inscrire</button>
                    <br><br>
                    <a href="login.php"><p class="btn btn-lg btn-primary" >J'ai déjà un compte, je me connecte</p></a>
                </form>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
</body>
</html>