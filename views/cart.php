<?php 
$pageTitle = "Cart";
require_once("../partials/start_body.php");
if(!isset($_SESSION['user']) || (isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 1)){
	header(("Location: error.php"));
}



?>

<?php require_once("../partials/navbar.php") ?>

<main id="main">
	<div class="container py-5">
		<section class="row">
			<div class="col">
				<h1 class="text-center"> My Cart </h1>

				<div class="table-responsive">
					<table id="cart-items" class="table table-striped table-bordered">
						<thead>
							<tr class="text-center">
								<th>Image</th>
								<th>Item Name</th>
								<th>Item Price</th>
								<th>Item Quantity</th>
								<th>Item Subtotal</th>
								<th>Actions</th>
							</tr>
						</thead>

						<tbody>
						<?php if(isset($_SESSION["cart"]) && count($_SESSION["cart"]) != 0): ?>
							<?php 
							require_once("../controllers/connect.php");
							$cart_total = 0;
							foreach($_SESSION["cart"] as $id => $qty) {
									$sql = "SELECT * FROM items WHERE id = '$id'";
									$item_info = mysqli_query($conn, $sql);
									$item = mysqli_fetch_assoc($item_info);
									$subtotal = $_SESSION["cart"][$id] * $item["price"];
									$cart_total += $subtotal; ?>
							 <tr>
							 	<td class="image"><img src="../app/assets/images/<?php echo $item["image"] ?>"></td>
							 	<td class="item_name"> <?php echo $item["item_name"] ?></td>
							 	<td class="item_price">₱<?php echo number_format($item["price"], 2, ".", ",") ?></td>
							 	<td class="item_quantity"> <input type="number" class="form-control text-right" value="<?php echo $qty ?>" data-id="<?php echo $id ?>"> </td>
							 	<td class="item_subtotal">₱<?php echo number_format($item["price"], 2, ".", ",") ?></td>


							 	<td class="item_action"> <button class="btn btn-danger item-remove" data-id="<?php echo $id ?>"> Remove From Cart</button></td>
							 </tr>

							 <?php 
							}
							 mysqli_close($conn);

							  ?>

						</tbody>
						
						<tfoot>
							<tr>
								<td class="text-right font-weight-bold align-middle" colspan="3">Total:</td>
								<td class="text-right font-weight-bold align-middle" id="total_price">₱ <?php echo $cart_total; ?></td>
								<td class="text-center align-middle">
									<a href="checkout.php" class="btn btn-primary"> Proceed to checkout</a>
								</td>
							</tr>
						</tfoot>
						<?php endif; ?>
					</table>
				</div>






			</div>
		</section>	
	</div>
</main>



<?php  require_once("../partials/end_body.php") ?>