<?php
	include "connect.php";

$nom    = $_POST["nom"];
$prenom = $_POST["prenom"];
$email  = $_POST["email"];
$mdp    = $_POST["mdp"];
echo $nom;
$query = mysqli_query($conn, "INSERT INTO client(nom,prenom,email,mdp) VALUES ('$nom','$prenom','$email','$mdp')");

session_start();
header("location:index.php");
?>