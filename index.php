<?php require('actions/loginAction.php') ?>
<?php include 'head.php'?>
<!DOCTYPE html>
<html>
  <body>
    <br>
    <form class="container" method="POST">

    <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';}?>

    <div class="mb-3">
        <input type="text" placeholder="Ville de départ" class="form-control" name="mail">
    </div>

    <div class="mb-3">
        <input type="password" placeholder="Ville de départ" class="form-control" name="motDePasse">
    </div>
    <input id="startDate" class="form-control" type="date" />
    <br>
    <a href="index.php"><p class="btn btn-dark">Rechercher</p></a>
  </body>
</html>