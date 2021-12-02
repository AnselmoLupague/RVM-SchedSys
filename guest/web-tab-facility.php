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
    <link rel="stylesheet" href="../style.css" media="screen">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- NAVBAR JS -->          
	<script src="assets/plugins/jquery-3.3.1.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js"></script>
    
    <!-- Theme CSS -->  
	<link id="theme-style" rel="stylesheet" href="assets/css/theme-3.css">
	<link id="theme-style" rel="stylesheet" href="assets/css/style.css">
	<link id="theme-style" rel="stylesheet" href="assets/css/facility.css">

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
					    <a class="nav-link" href="guest_page.php"><i class="fa fa-home"></i> Home<span class="sr-only"></span></a>
					</li>
					<li class="nav-item active">
					    <a class="nav-link" i="fa" href="web-tab-facility.php"><i class="fa fa-building"></i>	Facility<span class="sr-only">(current)</span></a>
					</li>

					<li class="nav-item">
					    <a class="nav-link" href="calendar.php"><i class="fa fa-calendar"></i>	Schedules<span class="sr-only"></span></a>
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

                    <div class="card mb-4 border-1">
                    <div class="image">
                    <a  href="facilities/facility-volleyball.php">
                    <img class="image__img" src="assets/images/facilities/volleyball court.jpg" alt="image">
                    </a>
                    <div class="card-text">Volleyball Court</div>
                    </div>
                    </div>
                    

                    <div class="card mb-4 border-1">
                    <div class="image">
                    <a  href="facilities/facility-basketball.php">
                    <img class="image__img" src="assets/images/facilities/basketball court.jpg" alt="image">
                    </a>
                    <div class="card-text">Basketball Court</div>
                    </div>
                    </div>

                    <div class="card mb-4 border-1">
                    <div class="image">
                    <a  href="facilities/facility-fitnessfacility.php">
                    <img class="image__img" src="assets/images/facilities/fitness facility.jpg" alt="image">
                    </a>
                    <div class="card-text">Fitness Facility</div>
                    </div>
                    </div>
                    
                    <div class="card mb-4 border-1">
                    <div class="image">
                    <a  href="facilities/facility-soccerfield.php">
                    <img class="image__img" src="assets/images/facilities/soccer field.jpg" alt="image">
                    </a>
                    <div class="card-text">Soccer Field</div>
                    </div>
                    </div>
                    

                    <div class="card mb-4 border-1">
                    <div class="image">
                    <a  href="facilities/facility-swimmingpool.php">
                    <img class="image__img" src="assets/images/facilities/swimming pool.jpg" alt="image">
                    </a>
                    <div class="card-text">Swimming Pool</div>
                    </div>
                    </div>

                    <div class="card mb-4 border-1">
                    <div class="image">
                    <a  href="facilities/facility-trackandfield.php">
                    <img class="image__img" src="assets/images/facilities/track and field.jpg" alt="image">
                    </a>
                    <div class="card-text">Track and Field</div>
                    </div>
                    </div>

			</div>
	    </section>
	    
	    <footer class="footer text-center py-2 theme-bg-dark">
		   
	    <small class="copyright">BSIT 4th Year |<a href="http://anselmolupague.neocities.org/" target="_blank"> RVMSC SchedSys</a> | ©2020 All Rights Reserved.</small>
		   
	    </footer>
    
    </div><!--//main-wrapper-->

</body>
</html> 

