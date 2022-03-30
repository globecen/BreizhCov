<?php
session_start();
require('database.php');
$search_villeDepart = htmlspecialchars($_POST['villeDepart']);
$search_villeArrivee = htmlspecialchars($_POST['villeArrivee']);
$search_dateDepart = htmlspecialchars($_POST['dateDepart']);
$searchTrajet = $bdd->prepare('SELECT * FROM Trajet WHERE villeDepart = ? AND villeArrivee = ? AND dateDepart = ?');
$searchTrajet->execute(array($search_villeDepart, $search_villeArrivee, $search_dateDepart));
//$routes = $searchTrajet->fetchAll();
echo"<table class="table">";
  echo"<thead>";
    echo"<th scope="col">Départ</th>";
    echo"<th scope="col">Arrivé</th>";
    echo"<th scope="col">Date</th>";
    echo"<th scope="col">Nombre de places</th>";
  echo"</thead>";
  echo"<tbody>";  
while($row = $searchTrajet->fetch()) {
    echo"<tr>"
        echo"<td>";
        echo"test";
        //echo $row['villeDepart'];
        echo"</td>";
        /*<td>echo $row['villeArrivee'];</td>
        <td>echo $row['dateDepart'];</td>
        <td>echo $row['places'];</td>*/
    echo"</tr>";
}
echo"</table>";
?>