<?php
session_start();
require('database.php');
$search_villeDepart = htmlspecialchars($_POST['villeDepart']);
$search_villeArrivee = htmlspecialchars($_POST['villeArrivee']);
$search_dateDepart = htmlspecialchars($_POST['dateDepart']);
$searchTrajet = $bdd->prepare('SELECT * FROM Trajet WHERE villeDepart = ? AND villeArrivee = ? AND dateDepart = ?');
$searchTrajet->execute(array($search_villeDepart, $search_villeArrivee, $search_dateDepart));
//$routes = $searchTrajet->fetchAll();
<table class="table">
  <thead>
    <th scope="col">Départ</th>
    <th scope="col">Arrivé</th>
    <th scope="col">Date</th>
    <th scope="col">Nombre de places</th>
  </thead>
  <tbody>  
while($row = $searchTrajet->fetch()) {
    <tr>
        <td>echo $row['villeDepart'];</td>
        <td>echo $row['villeArrivee'];</td>
        <td>echo $row['dateDepart'];</td>
        <td>echo $row['places'];</td>
    </tr>
}
</table>
?>