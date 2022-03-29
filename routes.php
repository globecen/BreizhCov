<?php require('actions/createRoute.php') ?>
<?php include 'head.php'?>
<!DOCTYPE html>
<html>
  <body>
    <form class="container" method="POST">

    <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';}?>
    <br>
    <div class="mb-3">
        <input type="text" placeholder="Ville de départ" class="form-control" name="mail">
    </div>

    <div class="mb-3">
        <input type="password" placeholder="Ville d'arrivée" class="form-control" name="motDePasse">
    </div>
    <input id="startDate" class="form-control" type="date" />
    <br>
    <button type="submit" class="btn btn-primary" name="validate">Ajouter</button>
  </body>
</html>