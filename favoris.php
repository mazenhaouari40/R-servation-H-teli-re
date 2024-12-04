<?php
session_start();
include "connect.php";
?>
<html>
<head>
<link rel="stylesheet" href="css/favoris.css">
</Head>

<body>
<?php
include "header.php";
?>

  <div class="main-hotel">

<div class="toppane"><h2>Les Chambres</h2></div>


<?php
$id=$_SESSION["client"];
$req=mysqli_query($conn,"SELECT cat_img,nom,nbchambre,prix FROM categorie,reservation WHERE (categorie.id_cat=reservation.id_cat) and 
(id_cl='$id');");
while($tab = mysqli_fetch_row($req))
{
	echo "
	<div class='leftpane'>
<div class='card'>
  <img src='$tab[0]' alt='Avatar' style='width:100%' height='270px' width='300px'>
  <div class='container'>
    <h4><b>Type : $tab[1] </b></h4> 
    <p>Chambre Disponible : $tab[2]</p> 
	<p>Prix: $tab[3]</p> 
  </div>
</div>
</div>
	";
	
}


?>



</div>






</body>
</html>