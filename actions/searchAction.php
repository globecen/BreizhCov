<?php
session_start();
require('database.php');
$search_villeDepart = htmlspecialchars($_POST['villeDepart']);
$search_villeArrivee = htmlspecialchars($_POST['villeArrivee']);
$search_laDate = htmlspecialchars($_POST['dateDepart']);
$searchTrajet = $bdd->prepare('SELECT * FROM Trajet WHERE villeDepart='+$search_villeDepart+' AND villeArrivee='+$search_villeArrivee+' AND dateDepart='+$search_laDate+')');
//$searchTrajet->execute(array($search_villeDepart,$search_villeArrivee,$search_laDate));
//$searchTrajetRes = $searchTrajet->fetch();
var_dump($searchTrajet);
?>