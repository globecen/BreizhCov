<?php require('actions/loginAction.php')?>

<!DOCTYPE html>
<html lang="fr">
<?php include 'head.php'?>
<body>
    <br>
    <form class="container" method="POST">

    <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';}?>

    <div class="mb-3">
        <input type="text" placeholder="Email" class="form-control" name="mail">
    </div>

    <div class="mb-3">
        <input type="password" placeholder="Mot de passe"  class="form-control" name="motDePasse">
    </div>

    <button type="submit" class="btn btn-dark" name="validate">Se connecter</button>
    <br><br>
    <a href="signup.php"><p class="btn btn-dark">Je n'ai pas de compte, je m'inscris</p></a>
</body>
</html>