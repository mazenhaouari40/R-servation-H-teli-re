<?php 
	include "../connect.php";
	session_start();
?>
<!DOCTYPE html>
 <html>
  <head>
    <title>Setting</title>
    <link rel="stylesheet" href="style.css">
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
  width:500px;
  font-size: 16px;
  border-radius: 4px;
  border: none;
  border: solid 1px #ccc;
  padding: 0 11px;
}
 input[type=file] {
  height: 40px;
  width:500px;
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
	   <form action="ajouterhotel.php" method="POST" enctype="multipart/form-data">
	   
			<div class="inputDiv">
				<label for="nom">nom</label>
				<input type="text" id="nom" value="" placeholder="Nom du produit" name="nom" required autocomplete="off">
			</div>
			<div class="inputDiv">
					<label for="prix">Prix</label>
					<input type="number" placeholder="Prix de produit" name="prix" required autocomplete="off">
			</div>			
			<div class="inputDiv">
					<label for="nombre">nombre</label>
					<input type="number" id="nombre" value=""  placeholder="nb" name="nombre" required autocomplete="off">
			</div>	
			<div class="inputDiv">
					<label>Photo du produit</label>
					<input type="file" name="img">			
			</div>	
			<input type="submit" value="envoyer" >
		</form>
		</div>
    </div>
  </div>
</div>
</body>
</html>

<?php
	if($_SERVER["REQUEST_METHOD"] === "POST")
							{

								$photo  = $_FILES["img"]["name"];
								$destination = "img/users/".$_FILES["img"]["name"];
								//move_uploaded_file($_FILES["img"]["tmp_name"], $destination);
//								$req = mysqli_query($conn, "INSERT INTO food VALUES('','$nom','$prix','$desc','$destination')");
							}


?>



