<?php
//var_dump($_POST);
$host = 'localhost';
$username = 'root';
$password = '';
 $dbname="etudiant_db";

//On établit la connexion
$conn = new mysqli($host, $username, $password,$dbname);

//On vérifie la connexion
if($conn->connect_error){
    die('Erreur : ' .$conn->connect_error);
}else{
    echo 'Connexion réussie';
}

