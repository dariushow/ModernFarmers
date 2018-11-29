<?php 

 ?>


<!DOCTYPE html>
<html>
<head>
  <title>Landing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="swiper.min.css">
  <!-- font-icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <!-- external css -->
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<div class="py-5 bg-primary text-center">
  <h1>asdasdasdasdasd</h1>
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

  <div class="py-1 bg-dark"></div>

 

  <!-- start of carousel -->


  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div id="car" class="carousel-item active">
        <img class="d-block" src="../app/assets/images/fashion1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block" src="../app/assets/images/fashion2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block" src="../app/assets/images/fashion3.jpg" alt="Third slide">
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



  <!-- start of cards -->

  <h1 class="text-center mt-5 feature-collections"> FEATURE COLLECTIONS</h1>

  <div class="card-deck mt-5">
    <div id="flip" class="card">
      <img class="card-img-top" src="../app/assets/images/winterMen.jpg" alt="Card image cap">
      <div class="card-body">
        <div class="theback"> <img class="ml-2" src="../app/assets/images/winter2.jpg"">
        </div>
        <h5 class="card-title">Winter Collection</h5>
        <p class="card-text">25% off selected Items</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>

    <div id="flip" class="card">
      <img class="card-img-top" src="../app/assets/images/beach1.jpg" alt="Card image cap">
      <div class="card-body">

        <div class="theback"><img src="../app/assets/images/beach2.jpg"></div>
        <h5 class="card-title">Summer Collection</h5>
        <p class="card-text">25% off selected Items</p>
      </div>

      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>

    <div id="flip" class="card mr-0">
      <img class="card-img-top" src="../app/assets/images/classic1.jpg" alt="Card image cap">
      <div class="card-body">

        <div class="theback"><img src="../app/assets/images/classic2.jpg"></div>
        <h5 class="card-title">Classic Collection</h5>
        <p class="card-text">25% off selected Items</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

  <!-- end of cards -->

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
  <h1>basic parallax scrolling effect</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <section class="sec2"></section>
  <section class="secText"></section>
  <h1>basic parallax scrolling effect</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <section class="sec3"></section>
  <section class="secText"></section>
  <h1>basic parallax scrolling effect</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <section class="sec4"></section>
  <section class="secText"></section>
  <h1>basic parallax scrolling effect</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  


















































































  <!-- start of 3d carousel -->

  <h1 class="mt-5 text-center">FEATURED ITEMS</h1>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="imgBx">
          <img id="caro" src="../app/assets/images/shoes.jpg"> 
        </div>
        <div class="details">
          <h3>SHOES<br><span>50% off</span></h3>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="imgBx">
          <img id="caro" src="../app/assets/images/pants.jpg"> 
        </div>
        <div class="details">
          <h3>PANTS<br><span>50%off</span></h3>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="imgBx">
          <img id="caro" src="../app/assets/images/necklace.jpg"> 
        </div>
        <div class="details">
          <h3>NECKLACE<br><span>50%off</span></h3>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="imgBx">
          <img id="caro" src="../app/assets/images/watch.jpg"> 
        </div>
        <div class="details">
          <h3>WATCH<br><span>WATCH</span></h3>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="imgBx">
          <img id="caro" src="../app/assets/images/shirt.jpg"> 
        </div>
        <div class="details">
          <h3>SHIRT<br><span>50%off</span></h3>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="imgBx">
          <img id="caro" src="../app/assets/images/camera.jpg"> 
        </div>
        <div class="details">
          <h3>Technology<br><span>50%off</span></h3>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="imgBx">
          <img id="caro" src="../app/assets/images/hat.jpg"> 
        </div>
        <div class="details">
          <h3>HAT<br><span>50%off</span></h3>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="imgBx">
          <img id="caro" src="../app/assets/images/bag.jpg"> 
        </div>
        <div class="details">
          <h3>BAG<br><span>50%off</span></h3>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="imgBx">
          <img id="caro" src="../app/assets/images/sunglass.jpg"> 
        </div>
        <div class="details">
          <h3><br><span>50%off</span></h3>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="imgBx">
          <img id="caro" src="../app/assets/images/limitedEdition.jpg"> 
        </div>
        <div class="details">
          <h3>Classic Set<br><span>50%off</span></h3>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>

  <script type="text/javascript" src="swiper.min.js"></script>

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














  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>