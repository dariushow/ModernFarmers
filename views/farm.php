<?php

$pageTitle = "catalog";
require_once("../controllers/connect.php");
require_once("../controllers/get_categories.php");
require_once("../controllers/get_product.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Farm</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script
	src="http://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php require_once("../partials/navbar.php"); ?>

	<main id="main" class="role farm-product">
		<div class="container">

			<div class="row pt-5">
				<div class="col-md-3">
					<h1 class="text-left">Livestock</h1>
				</div>
				<div class="col">
					<div class="input-group">
						<input id="search-form" type="text" name="search" class="form-control" placeholder="Search Product">
						<div class="input-group-append">
							<span class="input-group-text" id="search-icon"><i class="fas fa-search"></i></span>
						</div>
					</div>
				</div>
			</div>	
		</div>


		<div class="container-fluid mt-5">
			<section class="row">
				<div class="category-container col-md-3">
					<ul class="livestock list-group">
						<li class="list-group-item" id="showAll"> Show All</li>
						<?php foreach($categories as $category): ?>
							<li class="list-group-item" id="<?php echo $category['id'] ?>"> <?php echo $category["name"] ?></li>
						<?php endforeach; ?>	
					</ul>
				</div>




				<div class="products-container col-md-9">
					<div class="card-columns">
						<?php foreach($items as $item): ?>
							<div class="card" style="width: 18rem;">
								<img class="card-img-top" src="../app/assets/images/<?php echo $item['image'] ?>" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">
										<a href="product.php?id=<?php echo $item['id'] ?>"><?php echo $item['item_name'] ?></a>
									</h5>
									<p class="card-text">Php <?php echo $item['price'] ?></p>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>
							</div>
						<?php endforeach; ?>			
					</div>
				</div>
			</section>
		</div>
	</main>

<?php require_once("../partials/end_body.php") ?>


