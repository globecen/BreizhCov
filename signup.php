<?php require('actions/signupAction.php') ?>
<!DOCTYPE html>
<html lang="fr">
<?php include 'head.php'?>
<body>
    <br><br>
    <form class="container" method="POST">

        <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';}?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prenom</label>
            <input type="text" class="form-control" name="prenom">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="motDePasse">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mail</label>
            <input type="text" class="form-control" name="mail">
        </div>

        <button type="submit" class="btn btn-dark" name="validate">S'inscrire</button>
        <br><br>
        <a href="login.php"><p class="btn btn-dark">J'ai déjà un compte, je me connecte</p></a>
    </form>
</body>
</html>