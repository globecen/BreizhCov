<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=breizhcov;charset=utf8;', 'breizhcov', 'pass');

}catch(Exception $e){
    die('Une erreur a été trouvée : ' . $e->getMessage());
}
