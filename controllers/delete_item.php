<?php 
require_once("connect.php");

if(isset($_POST)) {
	$id = $_GET['id'];





$sql = "DELETE FROM items WHERE id = '$id'";
mysqli_query($conn, $sql);

echo "Item DELETED SECCESSFULLY";

} else {
	echo "YOu dont have permission to access this page";
}

 

header('location: ../views/items.php');


 ?>