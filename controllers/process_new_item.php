<?php 

require_once("../controllers/connect.php");
$item_name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$category_id = $_POST['category_id'];

move_uploaded_file($_FILES['image']['tmp_name'], '../app/assets/images/'.$_FILES['image']['name']);

$image_path = $_FILES['image']['name'];
$sql = "INSERT INTO items (item_name, price, description, category_id, image) VALUES ('$item_name',$price, '$description','$category_id', '$image_path')";

mysqli_query($conn, $sql) or die(mysqli_error($conn));

header('location: ../views/farm.php');
 ?>