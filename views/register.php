<?php 

// $pagetitle = "Register";
require_once("../partials/start_body.php");




?>

<!-- navbar -->
<?php require_once("../partials/navbar.php") ?>

<!-- registration layout -->
<main id="main" role="main">
	<div class="container py-5">
		<section class="row">
			<div class="col">
				<h1 class="text-center"><img class="brand-logo img-fluid" src="../app/assets/images/logo.jpg" width="50" height="50"> Register </h1>



				<div class="form-row justify-content-center">
					<form id="form-box">
						<div class="main">
							<header>
								<div class="image"><img id="avatar" src="../app/assets/images/avatar.jpg"></div>
								<div class="company text-center">Modern Farmers</div>
								<div class="heading">Buy Now</div>
							</header>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label> First Name: </label>
										<input class="form-control" type="text" name="firstname" id="firstname" placeholder="Enter First Name">
										<span class="text-danger"></span>

									</div>
								</div>

								<div class="col-lg-6">
									<div class="form-group">
										<label> Last Name: </label>
										<input class="form-control" type="text" name="lastname" id="lastname" placeholder="Enter Last Name">
										<span class="text-danger"></span>
									</div>
								</div>
							</div>






							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label>Username: </label>
										<input type="text" name="username" id="username" class="form-control" placeholder="Enter Username">
										<span class="text-danger small"></span>
									</div>	
								</div>

								<div class="col-lg-6">
									<div class="form-group">
										<label>Email Address: </label>
										<input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
										<span class="text-danger"></span>
									</div>	
								</div>
							</div>



							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label>Password: </label>
										<input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
										<span class="text-danger"></span>
									</div>	
								</div>



								<div class="col-lg-6">
									<div class="form-group">
										<label>Confirm Password: </label>
										<input type="password" name="confirmpassword" id="confirm-password" class="form-control" placeholder="Confirm Password">
										<span class="text-danger"></span>
									</div>	
								</div>
							</div>
						</div>
						


						
						<div class="col-lg-12">
							<div class="form-group">
								<label>Home Address:</label>
								<input type="text" name="home-address" id="home-address" class="form-control" placeholder="Please enter your Home Address">
								<span class="text-danger"></span>
							</div>
						</div>	
						
						<div class="footer-registration">
							<p>Already have an account?&nbsp;<a href="#">Login</a></p>
						</div>

						<button id="add-user" type="submit" class="btn btn-outline-warning btn-lg d-block mx-auto">Sign Up</button>


					</div>
				</form>
			</div>
		</section>
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










