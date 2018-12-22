<?php 


$pageTitle = "Orders Admin";
require_once("../partials/start_body.php");
if(isset($_SESSION['user']) && ($_SESSION['user']['role_id'] == 2)) {
	header("Location: error.php"); }
require_once("../partials/navbar.php");




?>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-8 offset-lg-2 mt-5">
			<table class="table table-striped">
				<thead>
					<tr>
						<td>Transaction Code</td>
						<td>Status</td>
						<td>Actions</td>
					</tr>
				</thead>
				<thead>
					
					<?php 

					require_once("../controllers/connect.php");
					$order_query = "SELECT o.id, o.transaction_code, s.name AS status FROM orders o JOIN statuses s ON (o.status_id = s.id)";
					$orders = mysqli_query($conn, $order_query);
					foreach ($orders as $key => $indiv_order) { ?>
					<tr>
						<td><?php echo $indiv_order['transaction_code']; ?></td>
						<td><?php echo $indiv_order['status']; ?></td>
						<td>
							<?php 
							if ($indiv_order['status']=="pending"){ ?>
							<a href="../controllers/complete_order.php?id=<?php echo $indiv_order['id']?>" class="btn btn-success">Complete Order</a>
							<a href="../controllers/cancel_order.php?id=<?php echo $indiv_order['id']?>" class="btn btn-danger">Cancel Order</a>
					<?php } ?>							 
						</td>
					</tr>	
					<?php } ?>



					 

				</thead>
			</table>
		</div>									
	</div>

</div>