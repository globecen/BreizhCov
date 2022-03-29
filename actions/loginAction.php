<?php 
session_start();
require('database.php');




//Validation du formulaire
if(isset($_POST['validate'])){

    //Vérifier si l'user a bien complété tout les champs
    if(!empty($_POST['pseudo']) && !empty($_POST['password'])){

        //les données de l'user
        $user_pseudo = htmlspecialchars($_POST['mail']);
        $user_password = htmlspecialchars($_POST['motDePasse']);

        //Vérifier si l'utilisateur existe (si le pseudo est correct)
        $checkIfUserExist = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
        $checkIfUserExist->execute(array($user_pseudo));

        if($checkIfUserExist->rowCount() > 0){

            //récupérer les données de l'utilisateur
            $usersInfos = $checkIfUserExist->fetch();

            //vérifier si le mot de passe est correct
            if(password_verify($user_password, $usersInfos['mdp'])){

                //Authentifier l'utilisateur sur le site et récup ses données dans des variables globales sessions
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $usersInfos['id'];
                $_SESSION['nom'] = $usersInfos['nom'];
                $_SESSION['prenom'] = $usersInfos['prenom'];
                $_SESSION['motDePasse'] = $usersInfos['motDePasse'];
                $_SESSION['mail'] = $usersInfos['mail'];

                //rediriger l'utilisateur vers la page d'accueil
                header('Location: index.php');

            }else{
                $errorMsg = "Votre mot de passe est incorrect...";
            }

        }else{
            $errorMsg = "Votre pseudo est incorrect...";
        }

    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }
}