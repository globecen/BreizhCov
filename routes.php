<?php require('actions/createRoute.php') ?>
<?php include 'head.php'?>
<!DOCTYPE html>
<html>
  <body>
    <form class="container" method="POST">

    <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';}?>
    <br>
    <div class="mb-3">
        <input type="text" placeholder="Ville de départ" class="form-control" name="villeDepart">
    </div>

    <div class="mb-3">
        <input type="text" placeholder="Ville d'arrivée" class="form-control" name="villeArrivee">
    </div>
    <div class="mb-3">
        <input type="text" placeholder="Nombre de places" class="form-control" name="places">
    </div>
    <input id="startDate" class="form-control" name="dateDepart" type="date" />
    <br>
    <button type="submit" class="btn btn-outline-dark" name="validate">Ajouter</button>
  </body>
</html>