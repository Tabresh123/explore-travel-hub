<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ExploreTravelHub</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.0/css/all.min.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> <img src="logo2.png" alt="logo" style="height: 50px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="contactus.html">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="explore.html">Explore</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Destinations
            </a>
            <ul class="dropdown-menu dropdown-">
              <li><a class="dropdown-item" href="beachs.html">Beaches</a></li>
              <li><a class="dropdown-item" href="gallery.html">gallery</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="mountains.html">mountains</a></li>
              <li><a class="dropdown-item" href="historical.html">Historical places</a></li>
              <li><a class="dropdown-item" href="cities.html">Cities</a></li>
              <li><a class="dropdown-item" href="nature&wild.html">Nature and Wildlife</a></li>
              <li><a class="dropdown-item" href="adventure.html">Adventure</a></li>
              <li><a class="dropdown-item" href="cultural.html">Cultural Experiences</a></li>
              <li><a class="dropdown-item" href="family.html">Family-Friendly</a></li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="aboutus.html">About us</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          <li class="nav-btn">
            <a class="btn btn-outline-light" href="logout.php">logout</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="slideshow1.png" class="d-block w-100" alt="image"
          style="height: 700px;">
      </div>
      <div class="carousel-item">
        <img src="slideshow2.png" class="d-block w-100" alt="image"
          style="height: 700px;">
      </div>
      <div class="carousel-item">
        <img src="slideshow3.png" class="d-block w-100" alt="image"
          style="height: 700px;">
      </div>
      <div class="carousel-item">
        <img src="slideshow4.png" class="d-block w-100" alt="image"
          style="height: 700px;">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> <br> <br>
<div class="card mb-3" style="max-width: 200px max-height 150px">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="summer.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body" style="text-align: center;"> <br><br>
        <h1 class="card-title" style="font-size: 80px; color: rgb(29, 29, 29); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Summer Getaway</h1> <br>
        <p class="card-text"><h1 style="font-size: 50px; font-family: Verdana, Geneva, Tahoma, sans-serif;">Visit the most beautiful beaches and relax in lavish resorts</h1></p> <br><br><br>
        <a href=""><h1 style="font-size: xx-large;">Inquire></h1></a>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3"  style="max-width: 200px max-height 180px ">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="winter.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body1" style="text-align: center;"> <br><br>
        <h1 class="card-title"  style="font-size: 80px; color: #000; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Winter Wonders</h1> <br>
        <p class="card-text" style="font-size: 50px; font-family: Verdana, Geneva, Tahoma, sans-serif;">Spend the holidays in cozy cabins and grand forests</p> <br><br><br>
        <a href=""><h1 style="font-size: xx-large;">Inquire></h1></a> <br>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3"  style="max-width: 200px max-height 150px">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="rainy.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body2" style="text-align: center;"> <br><br>
        <h1 class="card-title"  style="font-size: 80px; color: #000; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Holiday Tours</h1> <br>
        <p class="card-text" style="font-size: 50px; font-family: Verdana, Geneva, Tahoma, sans-serif;">Learn more about historical sites and visit unique vacation spots</p> <br><br><br>
        <a href=""><h1 style="font-size: xx-large;">Inquire></h1></a> <br>
      </div>
    </div>
  </div>
</div>

  <div class="counter">
    <!-- hitwebcounter Code START -->
<a href="" target="_blank">
 
<img src="https://hitwebcounter.com/counter/counter.php?page=8653080&style=0006&nbdigits=5&type=page&initCount=0" title="Free Counter" Alt="web counter"   border="2" /></a>                                    
                                    
  </div>
  <footer class="bg-dark text-white pt-5 pb-4">
    <div class="container text-center text-md-left">
      <div class="row text-center text-md-left">
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold" style="color: aqua;">ExploreTravelHub</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam delectus, et nisi saepe corrupti facere non
            doloremque, nulla repellendus quos sequi? Reiciendis laudantium enim impedit reprehenderit, laboriosam
            delectus quaerat? Dicta?</p>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning">places</h5>
          <p>
            <a href="" class="text-white" style="text-decoration: none;">goa</a>
          </p>
          <p>
            <a href="" class="text-white" style="text-decoration: none;">goa</a>
          </p>
          <p>
            <a href="" class="text-white" style="text-decoration: none;">goa</a>
          </p>
          <p>
            <a href="" class="text-white" style="text-decoration: none;">goa</a>
          </p>
        </div>
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Usefulinks</h5>
          <p>
            <a href="" class="text-white" style="text-decoration: none;">goa</a>
          </p>
          <p>
            <a href="" class="text-white" style="text-decoration: none;">goa</a>
          </p>
          <p>
            <a href="" class="text-white" style="text-decoration: none;">goa</a>
          </p>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>
          <p>
            <i class="fas fa-home mr-3"></i>  shamshabad
          </p>
          <p>
            <i class="fas fa-envelope mr-3"></i>  eth@gmail.com
          </p>
          <p>
            <i class="fas fa-phone mr-3"></i>  +7680882258
          </p>
        </div>

      </div>  
 <hr class="mb-4">
 <div class="row align-items-center">
  <div class="col-mb-7 col-lg-8">
    <p>Copyright @2023 All rights reserved by:
      <a href="" style="text-decoration: none;"><strong class="text-warning">ExploreTravelHub</strong></a>
    </p>
  </div>
  <div class="col-md-5 col-lg-4">
    <div class="text-center text-md-right">
<ul class="list-unstyled list-inline">
  <li class="list-inline-item">
    <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
  </li>
  <li class="list-inline-item">
    <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-instagram"></i></a>
  </li>
  <li class="list-inline-item">
    <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-linkedin"></i></a>
  </li>
  <li class="list-inline-item">
    <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
  </li>
</ul>
    </div>
  </div>
 </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>