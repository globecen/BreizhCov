<?php session_start();?>
<?php include 'head.php'?>
<!DOCTYPE html>
<html>

<style>
body{
  background-image: url('Z.png');
}
</style>

  <body>
    <br>
    <form action="actions/searchAction.php" class="container" method="POST">

    <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';}?>

    <div class="mb-3">
        <input type="text" placeholder="Ville de départ" class="form-control" name="villeDepart">
    </div>

    <div class="mb-3">
        <input type="text " placeholder="Ville de départ" class="form-control" name="villeArrivee">
    </div>
    <input id="startDate" class="form-control" type="date" name="dateDepart"/>
    <br>
    <p><input type="submit" value="Rechercher"class="btn btn-outline-dark"></p>
  </body>
</html>