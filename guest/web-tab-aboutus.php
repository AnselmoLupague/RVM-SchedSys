<?php 
require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'\RVMSCHED\RVM-SchedSys\dbcon.php');
?>

<html> 
<head>
    <title>City Sports Complex | About Us</title>

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

					<li class="nav-item">
					    <a class="nav-link" href="web-tab-facility.php"><i class="fa fa-building"></i>	Facility<span class="sr-only"></span></a>
					</li>

					<li class="nav-item">
					    <a class="nav-link" href="calendar.php"><i class="fa fa-calendar"></i>	Schedules<span class="sr-only"></span></a>
					</li>

					<li class="nav-item">
					    <a class="nav-link" href="web-tab-request.php"><i class="fa fa-envelope"></i>	Request<span class="sr-only"></span></a>
					</li>

					<li class="nav-item active">
					    <a class="nav-link" i="fa" href="web-tab-aboutus.php"><i class="fa fa-question"></i>	About Us<span class="sr-only">(current)</span></a>
					</li>

				</ul>

				
				<div class="my-2 my-md-3">
				    <a class="btn btn-primary" href="https://puertoprincesa.ph/" target="_blank">Find out more!</a>
				</div>
			</div>
		</nav>
    </header>

    <div class="main-wrapper" id="gradbg-wb"><!--Gradient Background-->
	<div class="mt-5 mb-5 ml-5 mr-5" id="gradbg-bw-rad"><!--Foreground-->
	<div class="col-sm-12" style="padding-right: 5px; padding-left: 5px;">
  <br><br>
        <div class="card-group">    
            <div class="card-au card-body mt-3 mb-3 ml-3 mr-3" id="aquabluebg">
				<h2>About Us</h2>
				<br>
        		<h2><small>Our <strong>Mission</strong> is to provide everyone from first-time participants to professional athletes with the real-time technology hassle-free service.</small></h2>
				<br>
				<h2><small>Our <strong>Vision</strong> is to be the primary leading sports scheduling system in the city, fueled by inspiring athletic people by achieving enjoyment and fitness.</small></h2>
            </div>
            <br>
            <div class="card-au card-body mt-3 mb-3 ml-3 mr-3" id="skybluebg">
        	<h2>Contact Us</h2>
        	<p>Please leave us a message :)</p>
          <form method="post" action="insert-message.php">
              <div class="form-group">
                <label for="exampleInputPassword1">Name <span style="color:red;"><sup>*</sup></span></label>
                <input type="text" class="form-control" name="full_name" placeholder="Full Name . . . . ." autofocus="autofocus" required />
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email Address <span style="color:red;"><sup>*</sup></span></label>
                <input type="email" class="form-control" name="email" placeholder="Email Address . . . . ." required />
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Website</label>
                <input type="text" class="form-control" name="website" placeholder="Website . . . . .">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Your Message <span style="color:red;"><sup>*</sup></span></label>
                <textarea class="form-control" placeholder="Your Message . . . . ." name="message" style="height:200px;" required ></textarea>
              </div>
              <button type="submit" name="send" class="btn btn-primary"><i class="glyphicon glyphicon-send"></i> Send</button>
            </form>
              </div>
            <br>
		</div>
	</div><!--//Foreground-->	
	</div><!--//Gradient Background-->    
	    <footer class="footer text-center py-2 theme-bg-dark">
		   
	    <small class="copyright">BSIT 4th Year |<a href="http://anselmolupague.neocities.org/" target="_blank"> RVMSC SchedSys</a> | ©2020 All Rights Reserved.</small>
		   
	    </footer>
    
    </div><!--//main-wrapper-->

</body>
</html> 

