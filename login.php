<?php require('actions/loginAction.php')?>
<?php include 'head.php'?>
<?php include 'style.php'?>
<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-9">
                <form class="container" method="POST">

                <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';}?>

                <div class="mb-3">
                    <input type="text" placeholder="Email" class="form-control" name="mail">
                </div>

                <div class="mb-3">
                    <input type="password" placeholder="Mot de passe"  class="form-control" name="motDePasse">
                </div>

                <button type="submit" class="btn btn-lg btn-primary" name="validate">Se connecter</button>
                <br><br>
                <a href="signup.php"><p class="btn btn-lg btn-primary" >Je n'ai pas de compte, je m'inscris</p></a>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
</body>
</html>