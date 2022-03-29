<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="boostrap/js/bootstrap.js"></script>
    <title>BreizhCov</title>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">BreizhCov</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="routes.php">Ajouter un trajet</a>
        </li>
        <?php if ($_SESSION['auth'] == false){?>
            <li class="nav-item">
            <a class="nav-link" href="login.php">Connexion</a>
          </li>
          <?php }
        else{?>
            <li class="nav-item">
            <a class="nav-link" href="logoutAction.php">Deconnexion</a>
          </li>
          <?php }?>
        
      </ul>
    </div>
  </div>
</nav>
</head>