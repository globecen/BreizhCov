<?php session_start();?>
<?php include 'head.php'?>
<?php require('database.php');?>
<?php
$user_id=$_SESSION['id'];
//var_dump($user_id);
$stmt = "SELECT * FROM Trajet WHERE idConducteur = "+$user_id);
var_dump(stmt);
//$listUser = $bdd->query('SELECT * FROM Trajet WHERE idConducteur = '+$user_id);
//$user = $listUser->fetchAll();
//var_dump($listUser);
//$listUser->execute());
?>
