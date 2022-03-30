<?php session_start();?>
<?php include 'head.php'?>

<?php
$user_id=$_SESSION['id'];
var_dump($user_id);
$listUser = $bdd->query('SELECT * FROM Trajet WHERE idConducteur = '+user_id);
$user = $stmt->fetch();
var_dump($listUser);
$listUser->execute());
?>
<?php require('database.php');?>