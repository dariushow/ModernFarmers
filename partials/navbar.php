<?php 
$section = null;

if(isset($_GET["section"])) {
  $value = htmlspecialchars($_GET["section"]);    

  if($value == "catalog") {
    $section = "catalog";
  } elseif($value == "cart") {
    $section = "cart";
  } elseif($value == "about_us") {
    $section = "about_us";
  } elseif($value == "login") {
    $section = "login";
  } elseif($value == "register") {
    $section = "register";
  }
}

?>


<nav id="navigation" class="navbar navbar-expand-lg navbar-light">
  <a id="modern-farmers" class="navbar-brand" href="#"><i class="fas fa-home"></i>Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link <?php if($section == "catalog") { echo "active"; } ?>" href="../views/farm.php?section=catalog"><i class="fas fa-user"></i> Farm </a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?php if($section == "cart") { echo "active"; } ?>" href="/capstone2-ecommerce/views/cart.php?section=cart"><i class="fas fa-shopping-cart"></i>
          <span id="cart-count" class="badge badge-light small">
            <?php 
            if(isset($_SESSION["cart"])) {
             echo array_sum($_SESSION["cart"]);
           } else {
            echo 0;
          }
          ?>
        </span> 
        Cart
      </a>
    </li>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="aboutus.php">About us</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Livestock
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

     <a class="dropdown-item" href="#">🐄 Cows</a> 
     <a class="dropdown-item" href="#">🐔 Chickens</a>
     <a class="dropdown-item" href="#">🐖 Pigs</a>
     <div class="dropdown-divider"></div>
     <a class="dropdown-item" href="#">Crop</a>
     <a class="dropdown-item" href="#">Rice</a>
     <a class="dropdown-item" href="#">Feeds</a>

   </div>
 </li>

 <?php if(!isset($_SESSION["user"])): ?>
  <li class="nav-item">
    <a class="nav-link <?php if($section == "login") { echo "active"; } ?>" href="../views/login.php?section=login"><i class="fas fa-user"></i> Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if($section == "register") { echo "active"; } ?>" href="../views/register.php?section=register"><i class="fas fa-user-plus"></i> Register</a>
  </li>
<?php else: ?>
  <li class="nav-item">
    <a href="nav-link" class="nav-link">Welcome, <?php echo $_SESSION["user"]["username"]; ?> </a>

  </li>
  <li class="nav-item">
    <a href="../controllers/logout.php" class="nav-link">Logout</a>
  </li>
<?php endif; ?>

</ul>
</div>
</nav>  

