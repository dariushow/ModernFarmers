<?php  

$pageTitle = "Checkout";
require_once("../partials/start_body.php");

require_once("../partials/navbar.php");
require_once("../controllers/connect.php");






?>



<?php 
if(!isset($_SESSION['user'])) {
	header("Location: login.php");
} else { ?>
<main>
	<div class="container py-5">
		<section class="row">
			<div class="col">
				<h1 class="text-center">Checkout page</h1>
				<form  method="POST" action="../controllers/placeorder.php">

					<div class="container">
						<div class="row mt-4">
							<div class="col-lg-8">
								<h4>Shipping Address</h4>
								<div class="form-group">
									<input type="text" name="addressLine" class="form-control" value="<?php echo $_SESSION['user']['home_address'] ?>">
								</div>
								<h4>Payment Options</h4>
								<div class="form-group">
									<select class="form-control" id="payment_mode" name="payment_mode">
										<?php 

										$payment_mode_query = "SELECT * FROM payment_modes";
										$payment_modes = mysqli_query($conn, $payment_mode_query);
										foreach($payment_modes as $payment_mode) {
											extract($payment_mode);
											echo "<option value='$id'>$name</option>";
										}
										 ?>
									</select>
								</div>
							</div>
							<div class="col-lg-4">
								<h4>Amount to Pay</h4>
								<span id="total-price" class="font-weight-bold">
									<?php 
									$cart_total=0;
									require_once("../controllers/connect.php");
									foreach($_SESSION['cart'] as $id => $qty) {
										$sql_query = "SELECT * FROM items WHERE id = $id";
										$item_info = mysqli_query($conn, $sql_query);
										$item = mysqli_fetch_assoc($item_info);
										$subTotal = $_SESSION['cart'][$id] * $item['price'];
										$cart_total += $subTotal;
									}
									echo " ₱ ". $cart_total;
									 ?>
								</span>
								<button type="submit" class="btn btn-primary">Place Order Now</button>
							</div>
						</div>
					</div>

				</form>
				<h4>Order Summary</h4>
				<table class="table table-striped">
					<thead>
						<tr>
							<td>Item name</td>
							<td>Item price</td>
							<td>Item quantity</td>
							<td>Item subtotal</td>
						</tr>
					</thead>
					<tbody>
						<?php 
						foreach($_SESSION['cart'] as $id => $qty){
							$sql_query = "SELECT * FROM items WHERE id = $id";
							$item_info = mysqli_query($conn, $sql_query);
							$item = mysqli_fetch_assoc($item_info); ?>
							<td class="align-middle text-center"><?php echo $item['item_name']; ?></td>
							<td class="align-middle text-center">₱ <?php echo $item['price']; ?></td>
							<td class="align-middle text-center"><?php echo $qty;?></td>
							<td class="align-middle text-center">₱ <?php echo $qty * $item['price']; ;?></td>
						

						 <?php } 
						 mysqli_close($conn);

						 ?>
					</tbody>
				</table>
			</div>
		</section>
	</div>
</main>

<?php } ?>







<?php  
require_once("../partials/end_body.php");


?>