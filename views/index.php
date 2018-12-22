<?php 
$pageTitle = "Home";
require_once("../partials/start_body.php");

?>





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
      <h1 class="flash animated">Committed To Quality.</h1>
      <h2 class="flash animated">Committed To You.</h2>
      <h3 class="flash animated">Think Quality!</h3>
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


<div class="container">
  <div class="row mt-5">

    <div class="col-lg-3 text-center">
      <img class="shake animated" src="../app/assets/images/home-icon.png">
      <h5 class="text-center home-title">Smart Logistics</h5>
      <p class="home-text">Delivering our produce to your place is an easy task for our company!</p>
    </div>


    <div class="col-lg-3 text-center">
      <img class="shake animated" src="../app/assets/images/home-icon1.png">
      <h5 class="text-center home-title">Products Range</h5>
      <p class="home-text">We are growing a multitude of different vegetables, fruits and grains...</p>
    </div>


    
    <div class="col-lg-3 text-center">
      <img class="shake animated"  src="../app/assets/images/home-icon2.png">
      <h5 class="text-center home-title">Quality Matters</h5>
      <p class="home-text">We’re determined to keep up the quality of all of our farming products as nigh as possible</p>
    </div>


    
    <div class="col-lg-3 text-center">
      <img class="shake animated" src="../app/assets/images/home-icon3.png">
      <h5 class="text-center home-title">Seasoned Team</h5>
      <p class="home-text">Our experts spent last few years excelling their skills and expanding their knowledge.</p>
    </div>
  </div>
</div>




<!-- start of carousel -->


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div id="car" class="carousel-item active">
      <img class="d-block" src="../app/assets/images/carousel1.jpg" alt="First slide">
    </div>
    <div id="car"class="carousel-item">
      <img class="d-block" src="../app/assets/images/carousel2.jpg" alt="Second slide">
    </div>
    <div id="car"class="carousel-item">
      <img class="d-block" src="../app/assets/images/cow.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- end of carousel -->





<h1 class="text-center mt-5 feature-collections">QUALITY LIVESTOCK</h1>
<div class="container mt-3">
  <div class="row">
    <div class="col-lg-6">
      <img src="../app/assets/images/quality-livestock.jpg">
    </div>

    <div class="col-lg-6">
      <h1 class="mt-5 text-farm">Welcome To Our Pig Farm</h1>
      <p class="mt-3 farm-text">We raise and breed domestic pigs of all kinds and produce different food products for almost three centuries. Contact us to get pork or bacon of the highest quality just right now. We will proceed your order quickly and deliver your parcel right to your house door.</p>
      <a href="farm.php"><button class="btn btn-outline-success" type="text">Go to Farm</button></a>
    </div>
  </div>
</div>


<div class="container mt-3">
  <div class="row">
    <div class="col-lg-6">
      <h1 class="mt-5 text-farm">Welcome To Our Chicken Farm</h1>
      <p class="mt-3 farm-text">We raise and breed domestic chickens of all kinds and produce different food products for almost three centuries. Contact us to get white meat of the highest quality just right now. We will proceed your order quickly and deliver your parcel right to your house door.</p>
      <a href="farm.php"><button class="btn btn-outline-success" type="text">Go to Farm</button></a>
    </div>
    <div class="col-lg-6">
      <img src="../app/assets/images/quality-livestock1.jpg">
    </div>
  </div>
</div>

<div class="container mt-3">
  <div class="row">
    <div class="col-lg-6">
      <img src="../app/assets/images/quality-livestock2.jpg">
    </div>
    <div class="col-lg-6">
      <h1 class="mt-5 text-farm">Welcome To Our Cow's Farm</h1>
      <p class="mt-3 farm-text">We raise and breed domestic cows of all kinds and produce different food products for almost three centuries. Contact us to get white meat of the highest quality just right now. We will proceed your order quickly and deliver your parcel right to your house door.</p>
      <a href="farm.php"><button class="btn btn-outline-success" type="text">Go to Farm</button></a>
    </div>
  </div>
</div>


<!-- start of TRENDING -->

<div class="container mt-5">
  <div class="row">
    <div class="col-lg-12 text-center mt-5">
      <ul class="text-center" id="list">
        <li id="list1">T</li>
        <li id="list1">R</li>
        <li id="list1">E</li>
        <li id="list1">N</li>
        <li id="list1">D</li>
        <li id="list1">I</li>
        <li id="list1">N</li>
        <li id="list1">G</li> 
      </ul>
    </div>
  </div>
</div>
</div>


<section class="sec1 mt-5"></section>
<section class="secText"></section>

<h1 class="text-center line"> Chicken that lay 300 eggs a year </h1>
<p id="parallax-text">Rhode Island Reds are the go-to chicken breed for backyard chook keepers who want a laidback layer to add to their flock. These hens are renowned for their hardiness in any type of environment. Rain or shine, snow or summer sun, the Rhode Island Red is happy-go-clucky in any type of backyard! They are a girl with grit, but don’t let that robust demeanour fool you, these ruby red ladies also possess a lot of heart! They make the perfect companion pet for any Chicken Lady or Lad and a great friend for kids, both big and small. Developed on the poultry farms in Little Compton, Rhode Island in the late 1800s, the Rhode Island Red breed grew in popularity throughout the United States, eventually becoming the state bird of… you guessed it! Rhode Island! A well-deserved honour for such a friendly and easy to care for chook!</p>
<section class="sec2"></section>
<section class="secText"></section>

<h1 class="text-center line">More Milk, Less Feed.</h1>
<p id="parallax-text">The Holstein Friesian is the main breed of dairy cattle in Australia, and said to have the "world's highest" productivity, at 10000 L of milk per year. The average for a single dairy cow in the US in 2007 was 9,164 kg (20,204 lb) per year, excluding milk consumed by her calves, whereas the same average value for a single cow in Israel was reported in the Philippine press to be 12,240 kg in 2009.High production cows are more difficult to breed at a two-year interval. Many farms take the view that 24 or even 36 month cycles are more appropriate for this type of cow. Certain behaviors such as eating, rumination, and lying down can be related to the health of the cow and cow comfort. These behaviors can also be related to the productivity of the cows. Likewise, stress, disease, and discomfort will have a negative effect on the productivity of the dairy cows. Therefore, it can be said that it is in the best interest of the farmer to increase eating, rumination, and lying down and decrease stress, disease, and discomfort to achieve the maximum productivity possible. Also, estrous behaviors such as mounting can be a sign of cow comfort, since if a cow is lame, nutritionally deficient, or are housed in an over crowded barn, the performance of estrous behaviors will be altered.</p>

<section class="sec3"></section>
<section class="secText"></section>
<h1 class="text-center line">Pigs Grows Fast Naturally</h1>
<p id="parallax-text">Frankly, farmers feed their pigs growth hormones about as often as your mother fed you parts off a Volkswagen when you were growing up.The truth is, added growth hormones are not permitted in growing pigs.Most pigs eat a diet that consists primarily of ground up corn and soybeans, with some trace vitamins and minerals added. All living things contain hormones, therefore any meat, milk, vegetable, etc. you consume would contain certain amounts of hormone. What many people are actually concerned about are added hormones, or what does not exist in the food naturally. Added hormones are not permitted for use in growing pigs. Therefore, the claim “no hormones added” cannot be used on the labels of pork unless it is followed by the statement “Federal regulations prohibit the use of hormones.”</p>








<!-- start of 3d carousel -->

<h1 class="mt-5 text-center">BEST SELLER</h1>
<div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="imgBx">
        <img id="caro" src="../app/assets/images/best-seller.jpg"> 
      </div>
      <div class="details">
        <h3>NEW HAMPSHIRE CHICKEN<br><span>50% off</span></h3>
        <h4 class="text-center">P 2000</h4>
        <div class="col-lg-3 offset-3">
        <a href="farm.php"><button class="btn btn-outline-primary mt-1">Go to Farm</button></a>
        </div>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="imgBx">
        <img id="caro" src="../app/assets/images/best-seller1.jpg"> 
      </div>
      <div class="details">
        <h3>FERAL ROOSTER<br><span>50%off</span></h3>
        <h4 class="text-center">P 2,100</h4>
         <div class="col-lg-3 offset-3">
        <a href="farm.php"><button class="btn btn-outline-primary mt-1">Go to Farm</button></a>
        </div>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="imgBx">
        <img id="caro" src="../app/assets/images/best-seller2.jpg"> 
      </div>
      <div class="details">
        <h3>RHODE ISLAND RED<br><span>50%off</span></h3>
        <h4 class="text-center">P 3000</h4>
         <div class="col-lg-3 offset-3">
        <a href="farm.php"><button class="btn btn-outline-primary mt-1">Go to Farm</button></a>
        </div>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="imgBx">
        <img id="caro" src="../app/assets/images/holstein-friesian bulls.jpg"> 
      </div>
      <div class="details">
        <h3>HOLSTEIN FRIESIAN BULL<br><span>50%off</span></h3>
        <h4 class="text-center">P 18,000</h4>
         <div class="col-lg-3 offset-3">
        <a href="farm.php"><button class="btn btn-outline-primary mt-1">Go to Farm</button></a>
        </div>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="imgBx">
        <img id="caro" src="../app/assets/images/Brahman Cattle.jpg"> 
      </div>
      <div class="details">
        <h3>BRAHMAN CATTLE<br><span>50%off</span></h3>
        <h4 class="text-center">P 16,000</h4>
         <div class="col-lg-3 offset-3">
        <a href="farm.php"><button class="btn btn-outline-primary mt-1">Go to Farm</button></a>
        </div>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="imgBx">
        <img id="caro" src="../app/assets/images/Bos Taurus.jpg"> 
      </div>
      <div class="details">
        <h3>BOS TAURUS<br><span>50%off</span></h3>
        <h4 class="text-center">P 15,000</h4>
         <div class="col-lg-3 offset-3">
        <a href="farm.php"><button class="btn btn-outline-primary mt-1">Go to Farm</button></a>
        </div>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="imgBx">
        <img id="caro" src="../app/assets/images/large-white-pig.jpg"> 
      </div>
      <div class="details">
        <h3>LARGE WHITE PIG<br><span>50%off</span></h3>
        <h4 class="text-center">P 5,000</h4>
         <div class="col-lg-3 offset-3">
        <a href="farm.php"><button class="btn btn-outline-primary mt-1">Go to Farm</button></a>
        </div>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="imgBx">
        <img id="caro" src="../app/assets/images/berkshire pig.jpg"> 
      </div>
      <div class="details">
        <h3>BERKSHIRE PIG<br><span>50%off</span></h3>
        <h4 class="text-center">P 6,000</h4>
         <div class="col-lg-3 offset-3">
        <a href="farm.php"><button class="btn btn-outline-primary mt-1">Go to Farm</button></a>
        </div>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="imgBx">
        <img id="caro" src="../app/assets/images/British-Landrace-pig.jpg"> 
      </div>
      <div class="details">
        <h3>BRITISH LANDRACE PIG<br><span>50%off</span></h3>
        <h4 class="text-center">P 5,000</h4>
         <div class="col-lg-3 offset-3">
        <a href="farm.php"><button class="btn btn-outline-primary mt-1">Go to Farm</button></a>
        </div>
      </div>
    </div>
  </div>
  <div class="swiper-pagination"></div>
</div>

<script type="text/javascript" src="../app/assets/js/swiper.min.js"></script>

<script>
  var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 60,
      stretch: 0,
      depth: 500,
      modifier: 2,
      slideShadows : true,
    },
    pagination: {
      el: '.swiper-pagination',
    },
  });
</script>

<!-- end of carousel -->



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
         <p class="footer-p"><i class="fas fa-phone mr-2"></i>+63 915 2644 507</p>
          <p  class="footer-p"><i class="far fa-envelope mr-2"></i>dariuspaano@gmail.com</p> 
        </div>



        <div class="col-lg-4 col-md-6 footer-contact mt-5  text-center">
          <h4 class="footer-title">Follow Us</h4>
          <ul id="snake-hover" class="justify-content-center mt-3"> 
            <li id="snakehover">
              <a href="https://www.facebook.com/darius.paanohow" target="_blank">
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