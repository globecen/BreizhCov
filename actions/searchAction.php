<?php
session_start();
require('database.php');
$search_villeDepart = htmlspecialchars($_POST['villeDepart']);
$search_villeArrivee = htmlspecialchars($_POST['villeArrivee']);
$search_dateDepart = htmlspecialchars($_POST['dateDepart']);
$searchTrajet = $bdd->prepare('SELECT * FROM Trajet WHERE villeDepart = ? AND villeArrivee = ? AND dateDepart = ?');
$searchTrajet->execute(array($search_villeDepart, $search_villeArrivee, $search_dateDepart));
$routes = $searchTrajet->fetchAll();
var_dump($routes);
?>