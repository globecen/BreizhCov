<?php require('actions/createRoute.php') ?>
<?php include 'head.php'?>
<?php include 'style.php'?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

  <!-- toat -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js  "></script>
    <script>
      document.getElementById('test').addEventListener('click', function(){toastr.info('Trajet ajouté');})
      </script>
  <body>
    <br>
    <div class="container">
      <div class="row">
        <div class="col">
        </div>
        <div class="col-9">
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
          <button id="test" type="submit" class="btn btn-lg btn-primary" name="validate">Ajouter</button>
        </div>
        <div class="col">
        </div>
      </div>
    </div>
  </body>
</html>