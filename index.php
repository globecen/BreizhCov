<?php require('actions/loginAction.php') ?>
<?php include 'head.php'?>
<!DOCTYPE html>
<html>
  <body>
    <a href="logoutAction.php"> déconnexion </a>
    <form class="container" method="POST">

    <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';}?>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Départ</label>
        <input type="text" class="form-control" name="mail">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Destination</label>
        <input type="password" class="form-control" name="motDePasse">
    </div>
    <input id="startDate" class="form-control" type="date" />
    <br>
    <a href="signup.php"><p class="btn btn-dark">Rechercher</p></a>
    <br>
    <a href="signup.php"><p class="btn btn-dark">Je n'ai pas de compte, je m'inscris</p></a>
  </body>
</html>