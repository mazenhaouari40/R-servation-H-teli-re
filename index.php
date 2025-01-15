<?php
session_start();
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>palms resort</title>
    <link rel="stylesheet" href="css/slide.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/swipper.css">
    <script src="js/sweetalert2@11.js"></script>
</head>
<body>
<?php
include "header.php";
?>
		
<!-- background image -->
    <div class="main-background">
        <div class="main-text">
            <h2>Book Now</h2>
        <h1>and enjoy your <span>Holiday</span></h1>
        </div>
    </div> 
<!-- background image ended -->
<section>
    <div class="about-us" id="about">
        <br>
        <br>    
    <h1>about us </h1>
    <div class="wrapper">
        <div class="content">
		
<p> Ce site est utilisée pour traiter les réservations en ligne en toute sécurité<br>

Vous pouvez  réserver en direct sur le site web « Palm resort » de l’hôtel.<br>

Vous pouvez voir :<br>
* les différentes chambres proposées <br>
* leurs disponibilités selon les dates<br> 
* les prix <br>
* les services <br>
Vous pouvez le faire dans les langues principales, 24 heures sur 24.<br>
De plus notre site offre la pssibilite de choisir parmi plusieurs categories :<br> 		
* chambre de luxe<br>
* chambre simple<br>
* chambre speciale<br>	
avec multiple choix dans chaque categorie.<br>

Notre site garentie les prix , le confort, le gain de temps , sans deplacement<br>
Pour cela notre site est le bon choix !!!<br>
</p>

        </div>
</section>
<!-- booking section -->
<div class="book-section" id="reserver">
    <div class="inner-book" >
	<form action="" method="POST">

<?php
$req3=mysqli_query($conn,"select id_cat,nom from categorie");
?>
        <input type="hotel" value="hotel" readonly="readonly" required>

        <input list="chambre" name="chambre1" placeholder="chambre" required>
            <datalist id="chambre">
			<?php 
			while ($tab = mysqli_fetch_row($req3))
			{
                echo "<option value='$tab[0]'>'$tab[1]'";
			}
			?>
            </datalist>
        <input type="date" placeholder="Arrivee" name="d1" required >
        <input type="date" placeholder="depart" name="d2" required>
        <input type="submit" value="book now">
    </form>
	</div>
</div>

<?php
if($_POST)
{
if (isset($_SESSION["client"]))
{
	$id=$_SESSION["client"];//id
    $chambre= $_POST["chambre1"];//id
    $arrivee= $_POST["d1"];
    $depart= $_POST["d2"];
	//requete sql:
	$req2 =mysqli_fetch_row(mysqli_query($conn,"select nbchambre from categorie where categorie.id_cat='$chambre'"));
	$nbchambre=$req2[0];
	//echo $nbchambre;
	if( $nbchambre!=0)
	{
		//echo $id,' ',$chambre,$arrivee,$depart;
	    $req4 =mysqli_query($conn,"INSERT INTO `reservation`(`id_cl`, `id_cat`, `arrivee`, `sortie`) VALUES ('$id','$chambre','$arrivee','$depart');		" );
		$req4 =mysqli_query($conn,"UPDATE `categorie` SET nbchambre=nbchambre-1 WHERE (id_cat='$chambre');");
	echo " <script> Swal.fire('Reservation reussite','','success') </script>";
	}
	else
	{
    echo "<script> Swal.fire({icon: 'error', text: 'Reservation echouee' }) </script>";
	}
}
else
{
    echo"<script> Swal.fire({icon: 'info', text: 's identifier' }) </script>";
}
}
?>

<!--Nos hotel-->
	<div class="hotel" id="h">
		<div class="head">
			<h1>Nos chambre</h1>
		</div>
		<div class="menu-container">
			<div class="swiper-container">
  				<div class="swiper-wrapper">	
					  
<?php
$req = mysqli_query($conn,"SELECT * FROM categorie");
while($tab = mysqli_fetch_row($req))
{
		echo"				  
					<div class='swiper-slide'>
						<div class='menu-item'>
							<img src='$tab[3]' alt='' width='500px' height='400px' >
							<span>$tab[2]d</span>
							<h1>$tab[1]</h1>
							<p>nombre de chambre <br>disponible: $tab[4]</p>
							<input type='hidden' name='id' value='$tab[0]' >
							<a href='#reserver' id='commander' class='commande-btn'>Reserver</a>
						</div>
					</div>"
	;}?>              
 				</div>
			    <div class="swiper-pagination"></div>
			    <div class="swiper-button-prev"></div>
			    <div class="swiper-button-next"></div>
			</div>
		</div>
	</div>
	
<!--footer-->
    <footer>
        <div class="footer-content">
            <h3>BOOK NOW</h3>
            <p>Book Now is a new website that gives you the possibility to book your tickets and enjoy your holiday in Tunisia in amazing hotels.</p>
        </div>
        <div class="footer-bottom">
            <p>copyright  &copy; 2022 all rights reserved <a href="#">ISI Developer</a>  </p>
                    
        </div>
    </footer>

<script src="js/script.js"></Script>
<script src="js/sweetalert2@11.js"></script>
</body>
</html>