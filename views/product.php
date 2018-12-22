<?php
	$pageTitle = "Product Information";
	require_once("../controllers/get_products.php");
	require_once("../partials/start_body.php");

	if($product !== NULL) {
		extract($product);
	} else {
		$product = NULL;
	}
	
?>

<?php require_once("../partials/navbar.php") ?>

	<main id="main" role="main">

		<?php if($product !== NULL): ?>
			<section class="row">
				<div class="col-md-3">
					<figure>
						<img src="../app/assets/images/<?php echo $image; ?>">
					</figure>
				</div>
				<div class="col-md-9 px-3">
					<h1 class="py-2">Product Information</h1>
					<hr>
					<h3> <?php echo $item_name ?> </h3>
					<p> <?php echo $description ?> </p>
					<p>&#8369; <?php echo number_format($price, 2, ".", ",") ?></p>
					<button class="btn btn-outline-primary"><i class="fas fa-shopping-cart mx-1"></i>ADD TO CART</button>
				</div>
			</section>

		<?php else: ?>
			<h1> Product Not Found </h1>
		<?php endif; ?>

	</main>

<?php require_once("../partials/end_body.php") ?>