<?php require('actions/loginAction.php') ?>
<?php include 'head.php'?>
<!DOCTYPE html>
<html>
  <body>
    <br>
    <form class="container" method="POST">

    <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';}?>

    <div class="mb-3">
        <input type="text" placeholder="Ville de départ" class="form-control" name="villeDepart">
    </div>

    <div class="mb-3">
        <input type="text " placeholder="Ville de départ" class="form-control" name="villeArrivee">
    </div>
    <input id="startDate" class="form-control" type="date" name="dateDepart"/>
    <br>
    <a href="actions/searchAction.php"><p class="btn btn-outline-dark">Rechercher</p></a>
  </body>
</html>