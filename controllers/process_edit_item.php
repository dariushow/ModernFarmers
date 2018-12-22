<?php 
require_once("connect.php");


$id = $_GET['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$category_id = $_POST['category_id'];


if($_FILES['image']['size'] !== 0) {
	move_uploaded_file($_FILES['image']['tmp_name'], '../assets/images/'.$_FILES['image']['name']);
	$image_path = $_FILES['image']['name'];
	$sql = "UPDATE items SET item_name = '$name', description='$description', price=$price, category_id='$category_id' image=$image_path WHERE id = $id";
} else {
	
$sql = "UPDATE items SET item_name = '$name', description='$description', price=$price, category_id='$category_id' WHERE id = $id";
}




mysqli_query($conn, $sql);


header('location: ../views/items.php');

 ?>