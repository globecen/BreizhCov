<?php session_start();?>
<?php include 'head.php'?>
<?php include 'style.php'?>
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<html>
  <body>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
          <form action="actions/searchAction.php" class="row row-cols-lg-auto g-3 align-items-center" method="POST">

          <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';}?>
          <div class="form-row align-items-center">
              <input type="text" placeholder="Ville de départ" class="form-control" name="villeDepart">
          </div>

          <div class="form-row align-items-center">
              <input type="text " placeholder="Ville de départ" class="form-control" name="villeArrivee">
          </div>
          <div class="form-row align-items-center">
            <input id="startDate" class="form-control" type="date" name="dateDepart"/>
          </div>
          <div class="form-row align-items-center">
            <input type="submit" value="Rechercher" class="btn btn-lg btn-primary">
          </div>
        </div>
        <div class="col-sm">
        </div>
      </div>
    </div>
  </body>
</html>