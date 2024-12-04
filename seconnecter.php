<?php
include "connect.php";
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reserver.com</title>
    <link rel="stylesheet" href="css/seconnecter.css">
</head>
<body style="background-image:url('image/background/bg_2.jpg'); background-size:cover;">
    <div class="container">
	
        <form class="login-form" method="POST" action="seconnecter2.php">
			<h1>S'identifier</h1>
            
			<div>
                <input type="email" placeholder="Email" required name="email" autocomplete="off">
            </div>
            <div>
                <input type="password" placeholder="Mot de passe" required name="mdp" autocomplete="off">
            </div>
            <div>
                <input type="submit" value="S'identifier" >
            </div>
	</div>
	</form>

</body>
</html>
