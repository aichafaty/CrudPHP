<?php


$host = 'localhost';
$username = 'root';
$password = '';
$dbname="etudiant_db";

//On établit la connexion
$conn = new mysqli($host, $username, $password,$dbname);

if (isset($_GET['deleteid'])) {
    $id=$_GET['deleteid'];
    $query="DELETE FROM `etudiant` WHERE id=$id";
    $result=mysqli_query($conn, $query);
        if ($result){
            header('location:formulaire.php');
        }else{
            die('Erreur : ' .$conn->connect_error);
        }
}

