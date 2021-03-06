<?php 
  session_start();

  if (!isset($_SESSION["admin"])) {
    header ("Location: login.php");
  }
?>

<html> 
<head>
    <title>City Sports Complex | Request</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/ppc-logo.png">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- NAVBAR JS -->          
    <script src="assets/plugins/jquery-3.3.1.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
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
		border-radius: 15px;
	}
	#aquabluebg {
		border-radius: 30px;
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
					<h4><?php echo "Admin"; ?></h4>
			        <hr> 
				</div><!--//profile-section-->
				
				<ul class="navbar-nav flex-column text-left">
                <li class="nav-item">
					    <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Home<span class="sr-only"></span></a>
					</li>

					<li class="nav-item active">
					    <a class="nav-link" href="add.php"><i class="fa fa-plus"></i>	Add<span class="sr-only"></span></a>
					</li>

					<li class="nav-item">
					    <a class="nav-link" i="fa" href="web-tab-schedules.php"><i class="fa fa-edit"></i>	Update<span class="sr-only">(current)</span></a>
					</li>

					<li class="nav-item">
					    <a class="nav-link" href="logout.php"><i class="fa fa-sign-out-alt"></i>	Logout<span class="sr-only"></span></a>
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
			
			<div class="card card-body mt-3 mb-3 ml-3 mr-3" id="skybluebg">
        	<h2 align="center">Add Schedule</h2>
            <form action="admin_add.php" method="post" enctype="multipart/form-data">
              <div class="form-group col-md-6">
                <div class="form-group">
                    <label>Title:<span style="color:red;"><sup>*</sup></span></label>
                    <input type="text" name="title" class="form-control form-control-lg" value="" required>
                    <span class="invalid-feedback"></span>
                </div> 
                <div class="form-group">
                    <label>Description:<span style="color:red;"><sup>*</sup></span></label>
                    <input type="text" name="descr" class="form-control form-control-lg" value="" required>
                    <span class="invalid-feedback"></span>
                </div> 
                <div class="form-group">
                    <label>Facility Use:<span style="color:red;"><sup>*</sup></span></label><br>
                    <select name="facility name" class="form-control-lg" value="" required>
					<option value="">--SELECT FACILITY--</option>
						<option value="Basketball">Basketball</option>
						<option value="Gym">Gym</option>
						<option value="Swimming Pool">Swimming Pool</option>
						<option value="Volleyball">Volleyball</option>
                    </select>
                    <span class="invalid-feedback"></span>
                </div> 
                <div class="form-group">
                    <label>Number of Participants:<span style="color:red;"><sup>*</sup></span></label><br>
                    
                    <input type="number" name="numParticipants" oninput="this.value=this.value.slice(0,this.maxLength)" class="form-control-lg" value="" maxlength="2" required >
                    <span class="invalid-feedback"></span>
                </div> 
				<div class="form-group">
					<label for="timedate">Schedule (date and time):<span style="color:red;"><sup>*</sup></span></label><br>
					<label>Date</label>
					<input type="date" name="date" class="form-control-lg" value="" required><br>
					<label>Start</label>
					<input type="time" name="start" class="form-control-lg" value="" required><br>
					<label>End&nbsp;&nbsp;</label>
					<input type="time" name="end" class="form-control-lg" value="" required>
				</div>
            </div>
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label>Requester Name (e.g. Juan Dela Cruz):<span style="color:red;"><sup>*</sup></span></label>
                    <input type="text" name="rname" class="form-control form-control-lg" value="" required>
                    <span class="invalid-feedback"></span>
                </div> 
                <div class="form-group">
                    <label>Email Address:<span style="color:red;"><sup>*</sup></span></label>
                    <input type="email" name="email" class="form-control form-control-lg" value="" required>
                    <span class="invalid-feedback"></span>
                </div> 
                <div class="form-group">
                    <label>Contact Number:<span style="color:red;"><sup>*</sup></span></label>
                    <input type="number" name="contact" class="form-control form-control-lg" oninput="this.value=this.value.slice(0,this.maxLength)" maxlength="11" value="">
                    <span class="invalid-feedback"></span>
                </div>
                
                <div class="form-group">
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                    <label for="fileToUpload">Insert request letter:<span style="color:red;"><sup>*</sup></span></label>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
                <div class="form-group">
                    <label>Remarks: <span style="color:red;"><sup>*</sup></span></label><br>
                    <select name="remark" class="form-control-lg" value="" required>
                        <option>Approved</option>
                        <option>Disapproved</option>
                    </select>
                    <span class="invalid-feedback"></span>
                </div> 
            <div class="col" align="right">
                <input type="submit" name="adminadd" class="btn btn-primary btn-block" style="height:40px; width:200px" value="Submit">
            </div>
            <?php
			if(isset($_SESSION['status'])) {
				echo $_SESSION['status'];
				unset($_SESSION['status']);
			}
		?>
          	</form>
              </div>
        	</div>
		</div>
	</div><!--//Foreground-->	
		    </div>
	    </section>
	    
	    <footer class="footer text-center py-2 theme-bg-dark">
		   
	    <small class="copyright">BSIT 4th Year |<a href="http://anselmolupague.neocities.org/" target="_blank"> RVMSC SchedSys</a> | ??2020 All Rights Reserved.</small>
		   
	    </footer>
    
    </div><!--//main-wrapper-->

</body>
</html> 

