<?php 
include "../connect.php";
	session_start();

$id = $_POST["id"];
$query = mysqli_query($conn, "DELETE FROM categorie WHERE id_cat = $id");
header("location:admin.php");
?>