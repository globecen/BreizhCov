<?php
session_start();
require('database.php');

//Validation du formulaire
if(isset($_POST['validate'])){
 
    //Vérifier si l'user a bien complété tout les champs
    if(!empty($_POST['mail']) && !empty($_POST['motDePasse']) && !empty($_POST['date'])){
        
        //les données de l'user
       
        $user_mail = htmlspecialchars($_POST['mail']);
        $user_motDePasse = htmlspecialchars($_POST['motDePasse']);
        $user_date = htmlspecialchars($_POST['date']);

        //insérer l'utilisateur dans la BDD
        $insertRouteOnWebsite = $bdd->prepare('INSERT INTO Trajet(mail, motDePasse, date) VALUES(?, ?, ?)');
        $insertRouteOnWebsite->execute(array($user_mail, $user_motDePasse, $user_date));
  
    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }
   
}
