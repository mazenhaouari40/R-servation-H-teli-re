<?php 
 	include "../connect.php";
	session_start();
	 

								$nom    = $_POST["nom"];
								$prix   = $_POST["prix"];
								$desc   = $_POST["desc"];
								$photo  = $_FILES["img"]["name"];
								$destination = "imageg/chambre/".$_FILES["img"]["name"];
								move_uploaded_file($_FILES["img"]["tmp_name"], $destination);
								$req = mysqli_query($conn, "INSERT INTO categorie VALUES('','$nom','$prix','$destination','$desc')");
							

?>