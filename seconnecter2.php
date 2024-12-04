	<?php
	include "connect.php";
	session_start();
	?>
	
	
	<?php 
			$email  = $_POST["email"];
			$mdp    = $_POST["mdp"];
			$query  = mysqli_query($conn, "SELECT * FROM client WHERE email = '$email' AND mdp = '$mdp'");
			$result = mysqli_fetch_row($query);

			if(mysqli_num_rows($query) != 0)
			{
				session_start();
				$_SESSION["client"]   = $result[0];
				$_SESSION["nom"]    = $result[1];
				$_SESSION["prenom"] = $result[2];
				header("location:index.php");
			}
			else{
					$query2  = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email' AND mdp = $mdp ");
					$result2 = mysqli_fetch_row($query2);	
					if(mysqli_num_rows($query2) != 0)
					{
						session_start();
						$_SESSION["admin"]  = $email;
						header("location:admin/admin.php");	
					}
			
					else
					{
						session_start();
						header("location:seconnecter.php");
					}
				}
	?>