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
    
    <!-- Theme CSS -->  
	<link id="theme-style" rel="stylesheet" href="assets/css/theme-3.css">
	<link id="theme-style" rel="stylesheet" href="assets/css/style.css">

	<style>
#gradbg-wb {
  		background-color: white; /* For browsers that do not support gradients */
  		background-image: linear-gradient(white, #0275d8);
		}
.card{
    width: 30%;
    height: 50%;
    border-radius: 30px;
    display: inline-block;
}
.card-tittle{
    color: #000000;
    font-family: 'Quicksand', sans-serif;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    font-size: 1.5em;  
}
.image {
    width: 100%;
    height: 90%;
<<<<<<< HEAD
=======
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
>>>>>>> c4c994852a9a853b01927664bff74e5fb55572f5
}

.image__img {
    display: block;
<<<<<<< HEAD
    position: absolute;
    width: 100%;
    height: 88%;
=======
    width: 90%;
    height: 85%;
>>>>>>> c4c994852a9a853b01927664bff74e5fb55572f5
    border-radius: 30px;
}

.image__overlay {
    border-radius: 30px;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-attachment: fixed;
    color: #ffffff;
    font-family: 'Quicksand', sans-serif;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.25s;
}

.image__overlay--blur {
    backdrop-filter: blur(5px);
}

.image__overlay--primary {
    background: #001aff;
}

.image__overlay > * {
    transform: translateY(20px);
    transition: transform 0.25s;
}

.image__overlay:hover {
    opacity: .8;
}

.image__overlay:hover > * {
    transform: translateY(0);
}
.image__description {
    font-size: 1em;
    margin-top: 0.25em;
}
	#gradbg-wb {
  		background-color: white; /* For browsers that do not support gradients */
  		background-image: linear-gradient(white, #0275d8);
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
					<li class="nav-item">
					    <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Home<span class="sr-only"></span></a>
					</li>
					<li class="nav-item active">
					    <a class="nav-link" i="fa" href="web-tab-facility.php"><i class="fa fa-building"></i>	Facility<span class="sr-only">(current)</span></a>
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

                    <div class="card">
                    <div class="card-tittle">Volleyball Court</div>
                    <div class="image">
                    <a  href="volleyball.php">
                    <img class="image__img" src="assets/images/ppc rvm csc volleyball court.jpg" alt="image">
                    </a>
                    </div>
                    </div>
                    

                    <div class="card mr-3 ml-3">
                    <div class="card-tittle">Basketball Court</div>
                    <div class="image">
                    <img class="image__img" src="assets/images/ppc rvm csc basketball court.jpg" alt="image">
                    <div class="image__overlay image__overlay--primary">
                    <p class="image__description">Here is the Basketball Court</p>
                    </div>
                    </div>
                    </div>

                    <div class="card">
                    <div class="card-tittle">Swimming Pool</div>
                    <div class="image">
                    <img class="image__img" src="assets/images/ppc rvm csc swimming pool.jpg" alt="image">
                    <div class="image__overlay image__overlay--primary">
                    <p class="image__description">Here is the Swimming Pool</p>
                    </div>
                    </div>
                    </div>
                    
                    <div class="card">
                    <div class="card-tittle">Volleyball Court</div>
                    <div class="image">
                    <img class="image__img" src="assets/images/Ramon_V._Mitra,_Jr._Sports_Complex.jpg" alt="image">
                    <div class="image__overlay image__overlay--primary">
                    <p class="image__description">Here is the Soccer field</p>
                    </div>
                    </div>
                    </div>

                    <div class="card mr-3 ml-3 mt-5">
                    <div class="card-tittle">Fitness Facility</div>
                    <div class="image">
                    <img class="image__img" src="assets/images/ppc rvm csc fitness facility.jpg" alt="image">
                    <div class="image__overlay image__overlay--primary">
                    <p class="image__description">Here is the Fitness facility</p>
                    </div>
                    </div>
                    </div>

                    <div class="card">
                    <div class="card-tittle">Tracks</div>
                    <div class="image">
                    <img class="image__img" src="assets/images/ppc rvm csc track and field.jpg" alt="image">
                    <div class="image__overlay image__overlay--primary">
                    <p class="image__description">Here are the Tracks</p>
                    </div>
                    </div>
                    </div>

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

