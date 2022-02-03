<?php 

?>

<html> 
<head>
    <title>City Sports Complex | Facility</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/ppc-logo.png"> 
    
    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js"></script>
    <!-- NAVBAR JS -->          
    <script src="assets/plugins/jquery-3.3.1.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <!-- Theme CSS -->  
	<link id="theme-style" rel="stylesheet" href="assets/css/theme-3.css">
	<link id="theme-style" rel="stylesheet" href="assets/css/style.css">
	<link id="theme-style" rel="stylesheet" href="assets/css/facilities.css">

	<style>
#gradbg-wb {
  		background-color: white; /* For browsers that do not support gradients */
  		background-image: linear-gradient(white, #0275d8);
		}
}
#gradbg-wb {
  		background-color: white; /* For browsers that do not support gradients */
  		background-image: linear-gradient(white, #0275d8);
		}

.image__img {
    width: 100%;
    height: 80%;
}

.card-tittle{
    font-family: 'Quicksand';
    display: flex;
    color: #000000;
    flex-direction: column;
    align-items: center;
    font-size: 2em;  
}
* {
    font-size: 14px;
    line-height: 2;
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
					<h4><?php echo "Guest"; ?></h4>
			        <hr> 
				</div><!--//profile-section-->
				
				<ul class="navbar-nav flex-column text-left">
					<li class="nav-item">
					    <a class="nav-link" href="../guest_page.php"><i class="fa fa-home"></i> Home<span class="sr-only"></span></a>
					</li>
					<li class="nav-item active">
					    <a class="nav-link" i="fa" href="../web-tab-facility.php"><i class="fa fa-building"></i>	Facility<span class="sr-only">(current)</span></a>
					</li>

					<li class="nav-item">
					    <a class="nav-link" href="../calendar.php"><i class="fa fa-calendar"></i>	Schedules<span class="sr-only"></span></a>
					</li>

					<li class="nav-item">
					    <a class="nav-link" href="../web-tab-request.php"><i class="fa fa-envelope"></i>	Request<span class="sr-only"></span></a>
					</li>

					<li class="nav-item">
					    <a class="nav-link" href="../web-tab-aboutus.php"><i class="fa fa-question"></i>	About Us<span class="sr-only"></span></a>
					</li>

				</ul>

				
				<div class="my-2 my-md-3">
				    <a class="btn btn-primary" href="https://puertoprincesa.ph/" target="_blank">Find out more!</a>
				</div>
			</div>
		</nav>
    </header>

    <div class="main-wrapper" id="gradbg-wb">
        <div class="card-group">    
        <div class="card card-body mt-5 mb-5 ml-5 mr-5" id="aquabluebg">
        <div style="text-align:right;"><a href="../web-tab-facility.php"><i class="fa fa-times-circle"></i></a></div>
        <div class="card-tittle">Fitness Facility</div>
        <img class="image__img" src="assets/images/ppc rvm csc fitness facility.jpg" alt="image">

    </div>
    </div>
	    
	    <footer class="footer text-center py-2 theme-bg-dark">
		   
	    <small class="copyright">BSIT 4th Year |<a href="http://anselmolupague.neocities.org/" target="_blank"> RVMSC SchedSys</a> | ©2020 All Rights Reserved.</small>
		   
	    </footer>
    
    </div><!--//main-wrapper-->
</body>
</html> 

