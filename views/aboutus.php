<?php 
$pageTitle = "About us";
require_once("../partials/start_body.php");
?>






</head>
<body>

  <div class="container">
    <div class="row">


      <div class="col-lg-2 text-center">
        <img src="../app/assets/images/logo.jpg">
      </div>

      <div class="col-lg-2">
        <div class="py-5 text-center">
          <h1 class="header-title">MODERN FARMERS</h1>
        </div> 
      </div>

      <div class="col-lg-8 mt-3 text-center">
        <h1>Committed To Quality.</h1>
        <h2>Committed To You.</h2>
        <h3>Think Quality!</h3>
      </div>
    </div>
  </div>


  <!-- start of nav -->

  <?php require_once("../partials/navbar.php"); ?>

  <script>
    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("navigation");
    var sticky = navbar.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
  </script>

  <!-- end of nav -->
  
        
<section id="razor-shape" class="section1"></section>
<section  id="razor-shape"class="section2">
  
<div class="container">
  <div class="row">
    <div class="col-lg-12">
  <h1 class="aboutus-title text-success">About Us</h1>
  <p class="aboutus-text">Modern Farmers exists to identify and promote the many ways in which sustainable agricultural development can be advanced worldwide. With one shared voice, Modern Farmers highlights the importance of improving farmers’ livelihoods as well as the important contribution that agriculture can make to related global issues such as food security, climate change, and biodiversity. It also aims to build synergies amongst its supporters in promoting Modern Farmer's mission.</p> 
    </div>

    <div class="col-lg-12 mt-5">
<h1 class="aboutus-title text-success">Our goal</h1>
<p class="aboutus-text">Our goal is to provide you with the best service and manage your livestock effeciently and effectively. And To conserve natural resources and maintain a healthy environment.</p>
      
    </div>
  </div>
</div>



</section>


<section  id="razor-shape"class="section3"></section>

<div class="our-team-area">
  <div class="our-team-text text-center">
    <h1>Our Team</h1>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="our-team-box">
          <img class="fluid" src="../app/assets/images/chris.jpg">
          <div class="icons">
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            
          </div>
          <h4>Christopher Peliño</h4>
          <p>CEO</p>
        </div>
      </div>

        <div class="col-md-6 col-lg-4">
        <div class="our-team-box">
          <img class="fluid" src="../app/assets/images/erika.jpg">
          <div class="icons">
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            
          </div>
          <h4>Christopher</h4>
          <p>Ui/Ux Designer</p>
        </div>
      </div>

        <div class="col-md-6 col-lg-4">
        <div class="our-team-box">
          <img class="fluid" src="../app/assets/images/abie.jpg">
          <div class="icons">
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            
          </div>
          <h4>Christopher Peliño</h4>
          <p>CEO</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-4 offset-2">
        <div class="our-team-box">
          <img class="fluid" src="../app/assets/images/jonis.jpg">
          <div class="icons">
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            
          </div>
          <h4>Christopher</h4>
          <p>Ui/Ux Designer</p>
        </div>
      </div>

       <div class="col-lg-4">
        <div class="our-team-box">
          <img class="fluid" src="../app/assets/images/arvin.jpg">
          <div class="icons">
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            
          </div>
          <h4>Christopher</h4>
          <p>Ui/Ux Designer</p>
        </div>
      </div>
  </div>
</div>
















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





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
