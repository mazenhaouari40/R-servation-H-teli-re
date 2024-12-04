	<?php
	include "../connect.php";
	session_start();
	?>

<!DOCTYPE html>
 <html>
  <head>
    <title>Setting</title>
    <link rel="stylesheet" href="style.css">
     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   </head>
   <style type="text/css">
     .card{
      background-color: white;
    }
      .inputLabel {
  font-size: 12px;
  color: #555;
  margin-bottom: 6px;
  margin-top: 24px;
}
  .inputDiv {
    width: 70%;
    display: flex;
    flex-direction: column;
    margin: auto;
  }
input {
  height: 40px;
  font-size: 16px;
  border-radius: 4px;
  border: none;
  border: solid 1px #ccc;
  padding: 0 11px;
}
 
 
  .submitButton {
    width: 80px;
    height: 40px;
     margin-top:25px;
     margin-left: 100px;
    display: block;
    text-align: center;
    color: #fff;
    background-color: #065492;
    border-color: #065492;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 2px 0 rgba(0, 0, 0, 0.035);
    border-radius: 4px;
    font-size: 14px;
    cursor: pointer;
  }
    input[type="submit"] {
    width: 80px;
    height: 40px;
     margin-top:25px;
     margin-left: 100px;
    display: block;
    text-align: center;
    color: #fff;
    background-color: #065492;
    border-color: #065492;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 2px 0 rgba(0, 0, 0, 0.035);
    border-radius: 4px;
    font-size: 14px;
    cursor: pointer;
  }
 
 h4{margin-left: 60px; 
}
   </style>
 }
}
<body>

<?php
	 include "barre.php";
 ?>
  <?php 
            $req = mysqli_query($conn, "SELECT email, mdp FROM admin ");
            $row = mysqli_fetch_row($req);
          ?>
<div id="contenu">
  <div class="card h-100">
	<div class="card-body">
       <div class="container">
	   <form method="POST">
			<h4>Change Password</h4>
			<div class="inputDiv">
				<label for="mdp">Ancien Mot de passe</label>
        <input type="password" id="mdp" value="<?php echo $row[1] ?>" placeholder="Mot de passe" name="oldpassword" autocomplete="off" required>
			</div>
			<div class="inputDiv">
				<label for="mdp,">Nouveau mot de passe</label>
        <input type="password" value=""  placeholder="Mot de passe" name="newpassword" autocomplete="off">
			</div>
			<input type="submit" value="continue" onclick="<?php
        $mdp= $_POST["newpassword"];
       $query = mysqli_query($conn, "UPDATE admin set mdp='$mdp'");
      ?>">
		</form>
		</div>
    </div>
  </div>
</div>
     
</body>
</html>
