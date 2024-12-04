
<?php 

include "../connect.php";
	session_start();

$id = $_POST["id"];
$query = mysqli_query($conn, "DELETE FROM client WHERE id_c = $id");
header("location:users.php");

?>
?>