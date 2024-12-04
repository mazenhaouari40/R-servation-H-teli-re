<?php 
	include "../connect.php";
	session_start();
?>
<?php 
	$nom= $_POST["nom"];
	$prix= $_POST["prix"];
	$nb= $_POST["nombre"];
	//$photo  = $_FILES['img']['size'];		
	$destination = "../image/chambre/".$_FILES["img"]["name"];
	echo $_FILES["img"]["tmp_name"];
	move_uploaded_file($_FILES["img"]["tmp_name"],$destination);
	$dest2= "image/chambre/".$_FILES["img"]["name"];
	$req = mysqli_query($conn, "INSERT INTO categorie(`nom`,`prix`,`cat_img`,`nbchambre`) VALUES ('$nom','$prix','$dest2','$nb')");					 
header("location:ajouter.php");
?>