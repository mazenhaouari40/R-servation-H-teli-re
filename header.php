    <!--header-->
    <header>
    <div class="principale">
        <div class="logo">
            <a href="#">palms resort
        </div>
    <ul>
        <li>
            <a href="index.php">Accueil</a>
        </li>
        <li>
            <a href="index.php #h">Chambre</a>
        
		<link rel="stylesheet" href="css/header.css">
		</li>
		<?php 
			if(isset($_SESSION["admin"]))
				{
					echo"<li>
						<a href='admin/admin.php'>Dashboard</a>
					 </li>
					 <li>
						<a href='deconnect.php'>Deconnexion</a>
					 </li>";
				}
			else
				{
				 if(isset($_SESSION["client"]))
				{
				echo "<li>
						<a href='favoris.php'>favoris</a>
					</li>";
				echo"<li><a href=''>";
				echo $_SESSION["nom"],' ',$_SESSION["prenom"];
				echo "</a>
					 </li>
					 <li>
						<a href='deconnect.php'>Deconnexion</a>
					 </li>";
				
				}
				else{
					echo "
					<li>
						<a href='seconnecter.php'>Se connecter</a>
					</li>
					<li>
						<a href='creecompte.php'>Cree Un Compte</a>
					</li> " ;
				}
			}
				?>
    </ul>
    </div>
</header>