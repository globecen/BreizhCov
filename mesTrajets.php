<?php session_start();?>
<?php include 'head.php'?>
<?php require('database.php');?>
<?php include 'style.php'?>
<?php
$user_id=$_SESSION['id'];
//var_dump($user_id);
$searchTrajet = $bdd->prepare('SELECT * FROM Trajet WHERE idConducteur = ?');
$searchTrajet->execute(array($user_id));
$routes = $searchTrajet->fetchAll();
var_dump($routes);
//$listUser = $bdd->query('SELECT * FROM Trajet WHERE idConducteur = '+$user_id);
//$user = $listUser->fetchAll();
//var_dump($listUser);
//$listUser->execute());
?>
