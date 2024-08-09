<?php
  session_start();
  if(!isset($_SESSION['name'])){
    header('location:index.php');
  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Dance WorkShop</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/wed3.jpg" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">Dance WorkShop</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="admin.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll preg" href="#ser">Registered Performer </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll tpreg" href="#ser">Todays Registration </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="registration/logout.php">Log out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(img/home1.jpg);background-size: cover; ">
    <div class="overlay-itro"></div>
  <br>
  <br>
  <br>
  <hr>
   <div class="container mt-5" id="presult">
    <div class="card" >
      <h2 class="text-center ">Performer Details </h2>
      <div class="card-header bg-info">
        <div class="row">
          <div class="col-md-3">
            <h3 class="text-center text-white">Performer Name</h3>
          </div>
          <div class="col-md-3">
            <h3 class="text-center text-white">Age </h3>
          </div>
          <div class="col-md-3">
            <h3 class="text-center text-white">Dance Style</h3>
          </div>
          <div class="col-md-3">
            <h3 class="text-center text-white">Booking Date</h3>
          </div>
          
        </div>
      </div>
      <div class="card-body bg-dark">
       <div id="psresult"></div>
      </div>
    </div>
  </div>
  <div class="container mt-5" id="ptresult">
    <div class="card" >
      <h2 class="text-center ">Performer Details </h2>
      <div class="card-header bg-info">
        <div class="row">
          <div class="col-md-3">
            <h3 class="text-center text-white">Performer Name</h3>
          </div>
          <div class="col-md-3">
            <h3 class="text-center text-white">Age </h3>
          </div>
          <div class="col-md-3">
            <h3 class="text-center text-white">Dance Style</h3>
          </div>
          <div class="col-md-3">
            <h3 class="text-center text-white">Booking Date</h3>
          </div>
          
        </div>
      </div>
      <div class="card-body bg-dark">
       <div id="ptsresult"></div>
      </div>
    </div>
  </div>
  <div id="pdstyle" class="container mt-5">
    <div class="row">
      <div class="col-md-3"></div>
       <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Enter Dance Style</h3>
          </div>
          <div class="card-body bg-dark">
            <form>
              <div class="form-group">
                   <h4 class="form-input form-control">Select Dance Style  : <select class="form-input" id="select" >
                     <option value="Bharatanatyam">Bharatanatyam</option>
                     <option value="Kathakali">Kathakali</option>
                     <option value="Folk">Folk</option>
                     <option value="Ballet">Ballet</option>
                     <option value="Belly Dance">Belly Dance</option>
                     <option value="Free Style">Free Style</option>
                     <option value="Pole Dance">Pole Dance</option>
                     <option value="Salsa">Salsa</option>
                   </select>  </h4>
                      
             </div>
             <div class="form-group">
                   <h4 class="form-input form-control">Booking Date  :  <input type="date" class="form-input" id="date"/> </h4>
                      
             </div>
            </form>
          </div>
          <div class="card-footer bg-dark">
            <div class="btn btn-danger psubmit">Submit</div>
          </div>
          
        </div>
         </div>
       </div>
        <div class="col-md-3"></div>
    </div>
    <div class="container mt-5" id="psearchresult">
    <div class="card" >
      <h2 class="text-center ">Performer Details </h2>
      <div class="card-header bg-info">
        <div class="row">
          <div class="col-md-3">
            <h3 class="text-center text-white">Performer Name</h3>
          </div>
          <div class="col-md-3">
            <h3 class="text-center text-white">Age </h3>
          </div>
          <div class="col-md-3">
            <h3 class="text-center text-white">Dance Style</h3>
          </div>
          <div class="col-md-3">
            <h3 class="text-center text-white">Booking Date</h3>
          </div>
          
        </div>
      </div>
      <div class="card-body bg-dark">
       <div id="psubmit2"></div>
      </div>
    </div>
  </div>
  </div>
  <!--/ Intro Skew End /-->

  

  <!--/ Section Services Star /-->
  <div class="section-counter paralax-mf bg-image" style="background-image: url(img/back2.jpg);background-size: cover;">
    <div class="overlay-mf"></div> 
  <section id="service" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Dance Style
            </h3>
            <p class="subtitle-a">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="service-box" style="background-image:url(img/img5.jpg); background-size: cover; height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white mr-5"> <b>Bharatanatyam </b></h2>
             
            </div>
          </div>
        </div>
        <div class="col-md-3">
           <div class="service-box" style="background-image:url(img/img8.jpg); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>Kathakali</b></h2>
            
            </div>
          </div>
        </div>
        <div class="col-md-3">
           <div class="service-box" style="background-image:url(img/img6.jpg); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white " > <b>Folk </b></h2>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
           <div class="service-box" style="background-image:url(img/img2.jpg); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>Ballet</b></h2>
             
            </div>
          </div>
        </div>
        <div class="col-md-3">
           <div class="service-box" style="background-image:url(img/img3.jpg); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>Belly Dance</b></h2>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
           <div class="service-box" style="background-image:url(img/img1.jpg); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>Free Style</b></h2>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
           <div class="service-box" style="background-image:url(img/img12.jpeg); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>Pole Dance</b></h2>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="service-box" style="background-image:url(img/img15.jpg); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white" style="margin-right: 70px;"> <b>Salsa</b></h2>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
  

  

  
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
