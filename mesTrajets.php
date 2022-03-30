<?php session_start();?>
<?php include 'head.php'?>
<?php require('database.php');?>
<?php
$user_id=$_SESSION['id'];
$listUser = $bdd->prepare('SELECT * FROM Trajet WHERE idConducteur = '+user_id);
//$listUser->execute());
?>