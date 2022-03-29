<?php
session_start();
require('database.php');

//Validation du formulaire
if(isset($_POST['validate'])){
 
    //Vérifier si l'user a bien complété tout les champs
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['motDePasse']) && !empty($_POST['mail'])){
        
        //les données de l'user
       
        $user_pseudo = htmlspecialchars($_POST['nom']);
        $user_lastname = htmlspecialchars($_POST['prenom']);
        $user_password = htmlspecialchars($_POST['motDePasse']);
        $user_firstname= htmlspecialchars($_POST['mail']);
           
        //vérifie si l'utilisateur existe déjà sur le site
        $checkIfUserAlreadyExists = $bdd->prepare('SELECT mail FROM Utilisateur WHERE mail = ?');
        $checkIfUserAlreadyExists->execute(array($user_pseudo));
     
        if($checkIfUserAlreadyExists->rowCount() == 0){

            //insérer l'utilisateur dans la BDD
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO Utilisateur(nom, prenom, motDePasse, mail) VALUES(?, ?, ?, ?)');
            $insertUserOnWebsite->execute(array($user_pseudo, $user_lastname, $user_firstname, $user_password));

            //récupérer les infos de l'utilisateur
            $getInfosOfThisUserReq = $bdd->prepare('SELECT * FROM Utilisateur WHERE nom = ? AND prenom = ? AND motDePasse = ? AND mail = ?');
            $getInfosOfThisUserReq->execute(array($user_lastname, $user_firstname, $user_pseudo, $user_password)));

            $userInfos = $getInfosOfThisUserReq->fetch();

            //Authentifier l'utilisateur sur le site et récup ses données dans des variables globales sessions
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $userInfos['id'];
            $_SESSION['nom'] = $userInfos['nom'];
            $_SESSION['prenom'] = $userInfos['prenom'];
            $_SESSION['motDePasse'] = $userInfos['motDePasse'];
            $_SESSION['mail'] = $userInfos['mail'];
            //rediriger l'utilisateur vers la page d'accueil
            header('Location: index.php');
           
        }else{
            $errorMsg = "l'utilisateur existe déjà sur le site";
        }
  */
    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }
   
}
