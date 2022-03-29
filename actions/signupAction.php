<?php

session_start();
require('database.php');


//Validation du formulaire
if(isset($_POST['validate'])){

    //Vérifier si l'user a bien complété tout les champs
    if(!empty($_POST['pseudo']) && !empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['password'])){

        //les données de l'user
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_lastname = htmlspecialchars($_POST['lastname']);
        $user_firstname= htmlspecialchars($_POST['firstname']);
        $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        //vérifie si l'utilisateur existe déjà sur le site
        $checkIfUserAlreadyExists = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
        $checkIfUserAlreadyExists->execute(array($user_pseudo));

        if($checkIfUserAlreadyExists->rowCount() == 0){

            //insérer l'utilisateur dans la BDD
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO users(pseudo, nom, prenom, mdp) VALUES(?, ?, ?, ?)');
            $insertUserOnWebsite->execute(array($user_pseudo, $user_lastname, $user_firstname, $user_password));

            //récupérer les infos de l'utilisateur
            $getInfosOfThisUserReq = $bdd->prepare('SELECT id, pseudo, nom, prenom FROM users WHERE nom = ?AND prenom = ? AND pseudo = ?');
            $getInfosOfThisUserReq->execute(array($user_lastname, $user_firstname, $user_pseudo));

            $userInfos = $getInfosOfThisUserReq->fetch();

            //Authentifier l'utilisateur sur le site et récup ses données dans des variables globales sessions
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $userInfos['id'];
            $_SESSION['lastname'] = $userInfos['nom'];
            $_SESSION['firstname'] = $userInfos['prenom'];
            $_SESSION['pseudo'] = $userInfos['pseudo'];

            //rediriger l'utilisateur vers la page d'accueil
            header('Location: index.php');

        }else{
            $errorMsg = "l'utilisateur existe déjà sur le site";
        }

    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }
}