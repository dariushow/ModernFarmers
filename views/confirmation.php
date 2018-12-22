<?php 

$pageTitle = "Confirmation";
require_once ("../partials/start_body.php");
if(!isset($_SESSION['user']) || (isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 1)){
	header(("Location: error.php"));
}
require_once ("../partials/navbar.php");


 ?>

 <?php 
 	if(isset($_SESSION['txn_number']) && isset($_SESSION['address'])){
?>
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<h1>Confirmation Page</h1>
				<h3>Reference No.: <?php echo $_SESSION['txn_number'] ?></h3>
				<h3>Shipped to: <?php echo $_SESSION['address'] ?></h3>
				<p>thank you for shopping! your order is now being processed.</p>
				<a href="farm.php" class="btn btn-primary">Continue Shopping</a>
				<?php 
					unset($_SESSION['txn_number']);
					unset($_SESSION['address']);
				 ?>
			</div>
		</div>
	</div>


 	} <?php  } else {
 		header("Location: catalog.php");
 	}

  ?> 	
