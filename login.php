<?php require('actions/loginAction.php')?>

<!DOCTYPE html>
<html lang="fr">
<?php include 'head.php'?>
<body>


    <br><br>
    <form class="container" method="POST">

    <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';}?>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="text" class="form-control" name="mail">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="motDePasse">
    </div>

    <button type="submit" class="btn btn-primary" name="validate">Se connecter</button>
    <br><br>
    <a href="signup.php"><p class="btn btn-dark">Je n'ai pas de compte, je m'inscris</p></a>
</body>
</html>