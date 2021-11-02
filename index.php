<?php 
//initialize session
  session_start();

  if( !isset($_SESSION['email']) || empty($_SESSION['email'])){
    header('location: login.php');
    exit;
  }
?>

<html> 
<head>
    <title>City Sports Complex | Home</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/ppc-logo.png"> 
    
    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js"></script>
    
    <!-- Theme CSS -->  
	<link id="theme-style" rel="stylesheet" href="assets/css/theme-3.css">
	<link id="theme-style" rel="stylesheet" href="assets/css/style.css">

	<style>
	#gradbg-wb {
  		background-color: white; /* For browsers that do not support gradients */
  		background-image: linear-gradient(white, #0275d8);
		}
</style>

</head> 

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>
    
    <header class="header text-center">	    
	    <h1 class="blog-name pt-lg-4 mb-0"><a href="index.php">City Sports Complex</a></h1>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column">
				<div class="profile-section pt-3 pt-lg-0">
				    <img class="profile-image mb-3 rounded-circle mx-auto" src="assets/images/ppc-logo.png" alt="image" >			
					
			        <hr> 
				</div><!--//profile-section-->
				
				<ul class="navbar-nav flex-column text-left">
					<li class="nav-item active">
					    <a class="nav-link" i="fa" href="index.php"><i class="fa fa-home"></i> Home<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="web-tab-facility.php"><i class="fa fa-building"></i>	Facility<span class="sr-only"></span></a>
					</li>

					<li class="nav-item">
					    <a class="nav-link" href="web-tab-schedules.php"><i class="fa fa-calendar"></i>	Schedules<span class="sr-only"></span></a>
					</li>

					<li class="nav-item">
					    <a class="nav-link" href="web-tab-request.php"><i class="fa fa-envelope"></i>	Request<span class="sr-only"></span></a>
					</li>

					<li class="nav-item">
					    <a class="nav-link" href="web-tab-aboutus.php"><i class="fa fa-question"></i>	About Us<span class="sr-only"></span></a>
					</li>

				</ul>

				
				<div class="my-2 my-md-3">
				    <a class="btn btn-primary" href="https://puertoprincesa.ph/" target="_blank">Find out more!</a>
				</div>
			</div>
		</nav>
    </header>

    <div class="main-wrapper" id="gradbg-wb">
	    <section class="cta-section py-5">
		    <div class="container text-center">
			    <h2 class="heading"><small>The Official Website of Ramon V. Mitra Jr. Sports Complex</small><br>Sports and Fitness Park</h2>
			    <div class="intro">Puerto Princesa City, Palawan</div>
		    </div><!--//container-->
	    </section>
	    <section class="blog-list px-3 py-5 p-md-5">
			<div class="border border-top-0 border-left-0 border-right-0 pl-3 mb-5">
			</div><!--Sports Facility-->
		    <div class="container">
			    
			<h2>Automatic Slideshow</h2>
<p>Change image every 2 seconds:</p>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="assets\images\its more fun in ppc city hall.jpeg" style="width:100%">
  <div class="text">City Hall</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="assets\images\yate view.jpeg" style="width:100%">
  <div class="text">Yate View</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="assets\images\tandikan.jpeg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

				
		    </div>
	    </section>
	    
	    <footer class="footer text-center py-2 theme-bg-dark">
		   
	    <small class="copyright">BSIT 4th Year |<a href="http://anselmolupague.neocities.org/" target="_blank"> RVMSC SchedSys</a> | ©2020 All Rights Reserved.</small>
		   
	    </footer>
    
    </div><!--//main-wrapper-->
    
    <!-- *****CONFIGURE STYLE****** -->  
    <div id="config-panel" class="config-panel d-none d-lg-block">
        <div class="panel-inner">
            <a id="config-trigger" class="config-trigger config-panel-hide text-center" href="#"><i class="fas fa-cog fa-spin mx-auto" data-fa-transform="down-6" ></i></a>
            <h5 class="panel-title">Choose Colour</h5>
            <ul id="color-options" class="list-inline mb-0">
                <li class="theme-1  list-inline-item"><a data-style="assets/css/theme-1.css" href="#"></a></li>
                <li class="theme-2  list-inline-item"><a data-style="assets/css/theme-2.css" href="#"></a></li>
                <li class="theme-3  active list-inline-item"><a data-style="assets/css/theme-3.css" href="#"></a></li>
                <li class="theme-4  list-inline-item"><a data-style="assets/css/theme-4.css" href="#"></a></li>
                <li class="theme-5  list-inline-item"><a data-style="assets/css/theme-5.css" href="#"></a></li>
                <li class="theme-6  list-inline-item"><a data-style="assets/css/theme-6.css" href="#"></a></li>
                <li class="theme-7  list-inline-item"><a data-style="assets/css/theme-7.css" href="#"></a></li>
                <li class="theme-8  list-inline-item"><a data-style="assets/css/theme-8.css" href="#"></a></li>
            </ul>
            <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
        </div><!--//panel-inner-->
    </div><!--//configure-panel-->

    
       
    <!-- Javascript -->          
    <script src="assets/plugins/jquery-3.3.1.min.js"></script>
    <script src="assets/plugins/popper.min.js"></script> 
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 

    <!-- Style Switcher -->
    <script src="assets/js/demo/style-switcher.js"></script>     
    

</body>
</html> 

