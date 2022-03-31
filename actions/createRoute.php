<?php
session_start();
if ($_SESSION['auth'] == false){ header('Location: ../index.php');
    exit();}
require('database.php');

//Validation du formulaire
if(isset($_POST['validate'])){
 
    //Vérifier si l'user a bien complété tout les champs
    if(!empty($_POST['villeDepart']) && !empty($_POST['villeArrivee']) && !empty($_POST['dateDepart'])){
        
        //les données de l'user
        $user_villeDepart = htmlspecialchars($_POST['villeDepart']);
        $user_villeArrivee = htmlspecialchars($_POST['villeArrivee']);
        $user_places = htmlspecialchars($_POST['places']);
        $user_date = htmlspecialchars($_POST['dateDepart']);
        $user_id = $_SESSION['id'];
        $insertRoute = $bdd->prepare('INSERT INTO Trajet(villeDepart, villeArrivee, places, dateDepart,idConducteur) VALUES(?, ?, ?, ?, ?)');
        $insertRoute->execute(array($user_villeDepart, $user_villeArrivee, $user_places, $user_date, $user_id));
    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }
   
}
