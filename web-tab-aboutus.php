<?php 

require_once 'db.php';

$name = '' ;
$email = '';
$contact = '';
$message = '';

if( $_SERVER['REQUEST_METHOD'] == 'POST'){

  $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $contact = trim($_POST['contact']);
  $message = trim($_POST['message']);

  if(empty($name)){
    $name_err = 'Please enter your name';
  }


  if(empty($email)){
    $email_err = 'Please enter email address'; 
  } 
/*
  else {
    $sql = 'SELECT id FROM users WHERE email = :email';

    if( $stmt = $pdo->prepare($sql)){
      $stmt->bindParam(':email', $email, PDO::PARAM_STR);

      if($stmt->execute()){
        if($stmt->rowCount() === 1){
          $email_err = 'Email is already taken';
        }
      }else{
        die('Something went wrong');
      }
    }
  }
*/

  if(empty($contact)){
    $contact_err = 'Please enter your contact number';
  } 

  if(empty($message)){
    $message_err = 'Please provide a message';
  } 

  //inputs are okay to be saved to the database
  if( empty($name_err) &&
      empty($email_err) &&
      empty($contact_err) &&
      empty($message_err))
  {
      $sql = 'INSERT INTO users (name, email, contact, message) VALUES (:name, :email, :contact, :message)';

      if( $stmt = $pdo->prepare($sql)){
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':contact', $contact, PDO::PARAM_STR);
		$stmt->bindParam(':message', $message, PDO::PARAM_STR);

        if( $stmt->execute()){
            echo "<font color='green'> Send Successfully.";
        } 
		/*
		else {
          die('Something went wrong');
        }
		*/
      }
  }
  
}

?>

<html> 
<head>
    <title>City Sports Complex | About Us</title>

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
	#gradbg-bw-rad {
		padding: 30px;
		background-color: blue; 
		background-image: linear-gradient(#0275d8, white);
		border-radius: 30px;
	}
	#skybluebg {
		background-color: #99ccff;
		border-radius: 30px;
	}
	#aquabluebg {
		border-radius: 30px;
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

					<li class="nav-item">
					    <a class="nav-link" href="web-tab-facility.php"><i class="fa fa-building"></i>	Facility<span class="sr-only"></span></a>
					</li>

					<li class="nav-item">
					    <a class="nav-link" href="web-tab-schedules.php"><i class="fa fa-calendar"></i>	Schedules<span class="sr-only"></span></a>
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
          
        <div class="card-group">    
            <div class="card card-body mt-3 mb-3 ml-3 mr-3" id="aquabluebg">
				<h2>About Us</h2>
				<br>
        		<h2><small>Our <strong>Mission</strong> is to provide everyone from first-time participants to professional athletes with the real-time technology hassle-free service.</small></h2>
				<br>
				<h2><small>Our <strong>Vision</strong> is to be the primary leading sports scheduling system in the city, fueled by inspiring athletic people by achieving enjoyment and fitness.</small></h2>
            </div>
            <br>
            <div class="card card-body mt-3 mb-3 ml-3 mr-3" id="skybluebg">
        	<h2>Contact Us</h2>
        	<p>Please leave us a message :)</p>
          	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label>Name:<sup>*</sup></label>
                <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($name_err)) ? 'is-invalid' : '';?>" value="<?php echo $name;?>">
                <span class="invalid-feedback"><?php echo $name_err; ?></span>
            </div> 
            <div class="form-group">
                <label>Email Address:<sup>*</sup></label>
                <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($email_err)) ? 'is-invalid' : '';?> " value="<?php echo $email;?> ">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Contact Number:<sup>*</sup></label>
                <input type="text" name="contact" class="form-control form-control-lg <?php echo (!empty($contact_err)) ? 'is-invalid' : '';?>" value="<?php echo $contact;?>">
                <span class="invalid-feedback"><?php echo $contact_err; ?></span>
            </div>
            <div class="form-group">
                <label>Message:<sup>*</sup></label>
                <textarea type="text" name="message" class="form-control form-control-lg <?php echo (!empty($message_err)) ? 'is-invalid' : '';?>" value="<?php echo $message;?>"></textarea>
                <span class="invalid-feedback"><?php echo $message_err; ?></span>
            </div>

            <div class="form-row ml-3 mr-3">
              <div class="col">
                <input type="submit" class="btn btn-primary btn-block" value="Submit">
              </div> 
            </div>
          	</form>
        	</div>
		</div>
	</div><!--//Foreground-->	
	</div><!--//Gradient Background-->    
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

