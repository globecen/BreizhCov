<?php 
session_start();
require('database.php');


//Validation du formulaire
if(isset($_POST['validate'])){

    
    //Vérifier si l'user a bien complété tout les champs
    if(!empty($_POST['mail']) && !empty($_POST['motDePasse'])){
        
        
        //les données de l'user
        $user_mail = htmlspecialchars($_POST['mail']);
        $user_motDePasse = htmlspecialchars($_POST['motDePasse']);
        
        //Vérifier si l'utilisateur existe (si le pseudo est correct)
        $checkIfUserExist = $bdd->prepare('SELECT * FROM Utilisateur WHERE mail = ?');
        $checkIfUserExist->execute(array($user_mail));
        
        //echo "Valeur res requete "+$checkIfUserExist->rowCount();
        if($checkIfUserExist->rowCount() > 0){
        
            //récupérer les données de l'utilisateur
            $usersInfos = $checkIfUserExist->fetch();
            //echo $usersInfos;
            //vérifier si le mot de passe est correct
            echo $usersInfos;
            if($usersInfos['motDePasse']){
                echo "lol";
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