<?php 
	require_once("connect.php");
	$id = $_GET['id'];

	$update_order_query = "UPDATE orders SET status_id = 3 WHERE id = $id";
	$result = mysqli_query($conn, $update_order_query);
	header("Location: ../views/orders.php");


 ?>