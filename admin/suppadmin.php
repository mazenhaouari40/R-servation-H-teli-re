
<?php 

include "../connect.php";
session_start();

$id = $_POST["id"];
$query = mysqli_query($conn, "DELETE FROM admin WHERE id_ad = '$id'");
header("location:users.php");

?>
?>