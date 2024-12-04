	<?php
	include "../connect.php";
	session_start();
	?>

<!DOCTYPE html>
 <html>
  <head>
    <meta charset="UTF-8">
    <title>Liste Chambre</title>
    <link rel="stylesheet" href="style.css">
   </head>
<style type="text/css">
     .card {
     background-color:white ;
     margin-bottom: 1rem;
     padding: 20px;
     margin: auto;
     line-height: 30px;
     width: 500px;
}
h2{
	text-align:center;
        font-style: italic;
        color: rgb(13, 61, 78);
        padding: 10px;
        border-bottom: 1px solid rgb(175, 102, 102);
 
}
    
  table{
  border-collapse: collapse;
         margin:auto;
        width: 25em;
         border-spacing: 1px;
        caption-side: bottom;
}

td{
   padding: 10px;
}
    input[type="submit"] {
    width: 80px;
    height: 40px;
     margin-top:25px;
     margin-left: 10px;
    display: block;
    text-align: center;
    color: #fff;
    background-color: red;
    border-color: #065492;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 2px 0 rgba(0, 0, 0, 0.035);
    border-radius: 4px;
    font-size: 14px;
    cursor: pointer;
  }
</style>
<body>
     <?php
	 include "barre.php";
	 ?>
<div id="contenu">
  <div class="card h-100">
	<div class="card-body">
 
       <div class="container">
                      <?php
           echo "<h1 style='color:red; border-bottom:1px solid rgb(175, 102, 102)' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Listes des Chambres</h1><br><br>
                <div class='menu-container'>
            ";
            $req = mysqli_query($conn, "SELECT * FROM categorie");
            while($tab = mysqli_fetch_array($req))
            {
              echo
            "
            <div class='menu-item'>
            <form action='suppchambre.php' method='POST'>
              <center>
              <table border='1'>
              <tr> 
			                <td><img src='../$tab[3]' alt='erreur' width='260px' height='180px' ></td>

                            <td><h1>$tab[1]</h1></td>

               <td><span>$tab[2]TND</span></td>
                 <input type='hidden' value='$tab[0]' name='id'>
                <td><input type='submit' id='delete' value='Supprimer'></td>
                </tr>
                </table>
                </form>
                </center>
            </div>
            ";
            }
            echo "</div>";  ?>
</div>
    </div>
  </div>
</div>
</body>
</html>