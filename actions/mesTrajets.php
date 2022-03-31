<?php session_start();?>
<?php if ($_SESSION['auth'] == false){ header('Location: ../index.php');
  exit();}
  ?>
<?php include 'style.php'?>
<head>
<link rel="icon" type="image/png" href="../img/logo.png" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script type="text/javascript" src="/js/require.js" data-main="/js/common.js"></script>

<!-- toat -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js  "></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <?php include 'style.php' ?>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="../boostrap/js/bootstrap.js"></script>
    <title>BreizhCov</title>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">BreizhCov</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      </li>
        <?php if ($_SESSION['auth'] == true){?>
            <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../routes.php">Ajouter un trajet</a>
        </li>
          <?php }
        else{?>
           <li class="nav-item">
          <a class="nav-link disabled" aria-current="page" href="../routes.php">Ajouter un trajet</a>
        </li>
          <?php }?>
          <?php if ($_SESSION['auth'] == true){?>
            <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="mesTrajets.php">Mes trajets</a>
        </li>
          <?php }?>
        <?php if ($_SESSION['auth'] == false){?>
            <li class="nav-item">
            <a class="nav-link btn btn-default" href="../login.php">Connexion</a>
          </li>
          <?php }
        else{?>
            <li class="nav-item">
            <a class="nav-link" href="../logoutAction.php">Deconnexion</a>
          </li>
          <?php }?>
        
      </ul>
    </div>
  </div>
</nav>
</head>
<?php
function afficher(){
               echo "The select function is called.";
            }
require('database.php');
$mesTrajets = $_SESSION['id'];
//var_dump($_SESSION['id']);
$search_villeDepart = $_SESSION['villeDepart'];
$search_villeArrivee = $_SESSION['villeArrivee'];
$search_dateDepart = $_SESSION['dateDepart'];
//$updateValNbPlace = $bdd->prepare('UPDATE `Trajet` SET `places` = '18' WHERE `Trajet`.`id` = 14;')
$searchTrajet = $bdd->prepare('SELECT * FROM Trajet WHERE idConducteur ='.$mesTrajets);
//var_dump($searchTrajet);
$searchTrajet->execute();

echo'<link rel="stylesheet" href="../style.php">';
echo'<html>';
echo'<body>';
echo'<br>';
echo'<div class="container">';
  echo'<div class="row">';
    echo'<div class="col">';
    echo'</div>';
    echo'<div class="col-9">';
    echo'<table class="table table-dark">';
      echo'<thead>';
        echo'<th scope="col">Départ</th>';
        echo'<th scope="col">Arrivé</th>';
        echo'<th scope="col">Date</th>';
        echo'<th scope="col">Nombre de places</th>';
        echo'<th scope="col"></th>';
      echo'</thead>';
      echo'<tbody>';
    while($row = $searchTrajet->fetch()) {
        echo'<tr class="table-light"><td>'.$row["villeDepart"].'</td><td>'.$row["villeArrivee"].'</td><td>'.$row["dateDepart"].'</td><td>'.$row["places"].'</td><td></td></tr>';
    }
      echo'</tbody>';
    echo'</table>';
    echo'</div>';
    echo'<div class="col">';
    echo'</div>';
  echo'</div>';
echo'</div>';
echo'</body>';
echo'</html>';
?>
  <script>
    document.getElementById('test').addEventListener('click', function(){toastr.info('Reservation effectuée');})
  </script>

<style>
    .toast-message{
      color:black;
    }
</style>