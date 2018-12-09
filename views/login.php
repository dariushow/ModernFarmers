<?php 

$pageTitle = "Login";
require_once("../partials/start_body.php");







?>

<?php require_once("../partials/navbar.php") ?>


<main class="container">
	<div class="row py-5">
		<div class="col">
			<h1 class="text-left"><img class="brand-logo img-fluid" width="50" height="50" src="../app/assets/images/logo.jpg">Modern Farmers</h1>

			<form>
				<h2>Login Now!</h2>
				<div class="form-row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="username-email">Username or Email</label>
							<input type="text" name="username-email" id="username-email" placeholder="Username or Email" class="form-control">
							<span class="text-danger small"></span>
						</div>	

						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" id="password" placeholder="Password" class="form-control">
							<span class="text-danger small"></span>
						</div>	
						<button id="login" type="submit" class="btn btn-block btn-success">Log In</button>
					</div>
				</div>
			</form>
		</div>

		<div class="col-md-6">
			<h2>Welcome To Modern Farmers</h2>
			<div class="box">
				<div class="word">
					<span class="rotating-word">Hi! Sign up for free shipping delivery</span>
					<span class="rotating-word">50% Discount This Holiday!</span>
					<span class="rotating-word mb-5">What are you waiting for?!</span>
					
				</div>
			</div>
		</div>
	</div> 		
</main>



<!-- start of footer -->

<footer id="footer">
	<div class="footer mt-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 footer-info mt-5">
					<h3 class="footer-title">Popular</h3>
					<p class="footer-p">Raising Chickens</p>
					<hr>
					<p class="footer-p">Dairy Products</p>
					<hr>
					<p class="footer-p">Tips to Farming </p>
					<hr>
					<h4 class="footer-title">Contact info</h4>
					<p class="footer-p">+63 915 2644 507</p>
					<p class="footer-p">dariuspaano@gmail.com</p> 
				</div>



				<div class="col-lg-4 col-md-6 footer-contact mt-5  text-center">
					<h4 class="footer-title">Follow Us</h4>
					<ul id="snake-hover" class="justify-content-center mt-3"> 
						<li id="snakehover">
							<a href="#">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<i class="fab fa-facebook" aria-hidden="true"></i>
							</a>
						</li>
						<li id="snakehover">
							<a href="#">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<i class="fab fa-instagram" aria-hidden="true"></i>
							</a>
						</li>
						<li id="snakehover">
							<a href="#">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<i class="fab fa-twitter" aria-hidden="true"></i>
							</a>
						</li>
						<li id="snakehover">
							<a href="#">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<i class="fab fa-google-plus" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
					<h3 class="footer-title">We accept</h3>
					<ul id="payment">
						<li id="payment-option">
							<a href="#"><i class="fab fa-cc-paypal"></i></a>

						</li>
						<li id="payment-option">
							<a href="#"><i class="fab fa-cc-visa"></i></a>

						</li>
						<li id="payment-option">
							<a href="#"><i class="fab fa-cc-mastercard"></i></i></a>

						</li>
						<li id="payment-option">
							<a href="#"><i class="fab fa-cc-amazon-pay"></i></a>

						</li>
					</ul>


				</div>

				<div class="col-lg-4 col-md-6 footer-newsletter mt-5">
					<h4 class="footer-title">Our Newsletter</h4>
					<p class="footer-p">Sign-up to get the latest info about livestock, farming tips, and raising livestock</p>
					<form action="" method="POST">
						<input type="submit" value="subscribe now" class="mt-2">

					</form>
				</div>
			</div>
		</div>
	</div>
	<p class="copyright  text-center bg-dark">Copyright &copy;Modern Farmers</p>
</footer>


<?php require_once("../partials/end_body.php") ?>