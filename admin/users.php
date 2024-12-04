	<?php
	include "../connect.php";
	session_start();
	?>

<!DOCTYPE html>
 <html >
  <head>
    <meta charset="UTF-8">
    <title>user</title>
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
h2{     text-align:center;
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
  border: 1px solid black;
  padding: 10px;
}
    
  
    
    th,
    td {
        padding: 6px, 12px;
        border: thin solid black;

    }
    
    th {
        text-align: left;
    }
    
    td:last-child,
    th:last-child {
        text-align: right;
    }
    
    tr:nth-child(odd) {
        background: #eee;
    }
    
    tr:nth-child(even) {
        background: #ddd;
    }
    
    tr:first-child {
        background: #cba;
        color: white;
    }
    
    table td:empty {
        background: #fff;
    }
    
    table tr+tr:hover {
        background: #bbb;
        color: white;
    }
    
    table tr+tr td:hover,
    table tr+tr th:hover {
        background: #777;
        cursor: pointer;
    }
    .container input {
    min-height: 25px;
    display: inline-block;
    width: 50%;
    background-color: red;
}
    input[type="submit"] {
    width: 80px;
    height: 40px;
     margin-top:25px;
     margin-left: 100px;
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
   <h2>Liste des Clients </h2>
   <br>
       
<?php
$sql = 'SELECT * FROM client';
$req = mysqli_query($conn,$sql);
echo'<table border="1">';
echo'<tr><td>Nom</td><td>prenom</td><td>E-mail</td><td>Action</td></tr>';
 while ($data = mysqli_fetch_array($req)) {
     echo '<tr>
     <td name="nom">'.$data[1].'</td>
     <td>'.$data[2].'</td>
     <td>'.$data[3].'</td>
     <form method="POST" name="f" action="supp.php">
     <input type="hidden" value="'.$data[0].'" name="id">
     <td> <input type="submit" value="supprimer"></td>
     </form>
     </tr>';
 }
?>

 </div>
    </div>
  </div>
</div>
 
 
 
 
</body>
</html>
