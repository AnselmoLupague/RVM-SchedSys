<?php 
  session_start();

  if (!isset($_SESSION["admin"])) {
    header ("Location: login.php");
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
    <link rel="stylesheet" href="../style.css" media="screen">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js"></script>

    <!-- NAVBAR JS -->          
    <script src="assets/plugins/jquery-3.3.1.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
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
            <h4><?php echo "Admin"; ?></h4>
			        <hr> 
				</div>
				
				<ul class="navbar-nav flex-column text-left">
					<li class="nav-item">
					    <a class="nav-link" i="fa" href="index.php"><i class="fa fa-home" ></i> Home<span class="sr-only"></span></a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="add.php"><i class="fa fa-plus"></i>	Add<span class="sr-only"></span></a>
					</li>

					<li class="nav-item active">
					    <a class="nav-link" href="web-tab-schedules.php"><i class="fa fa-edit"></i>	Update<span class="sr-only"></span></a>
					</li>


					<li class="nav-item">
					    <a class="nav-link" href="logout.php"><i class="fa fa-sign-out-alt"></i>	Logout<span class="sr-only"></span></a>
					</li>

				</ul>

				
				<div class="my-2 my-md-3">
				    <a class="btn btn-primary" href="https://puertoprincesa.ph/" target="_blank">Find out more!</a>
            <br><br>
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

<div class="border border-top-0 border-left-0 border-right-0 pl-3 mb-5"></div> <!--divider-->

<div class="container-xl">
			<a href="<?php $_SERVER['PHP_SELF']; ?>" 
				class = "btn btn-primary"><span class="glyphicon glyphicon-refresh">Refresh</span></a>
			<br><br>
			<nav class="blog-nav nav nav-justified">
					<a class="nav-link-prev nav-item nav-link" href="web-tab-schedules.php">Individual</a>
					<a class="nav-link-next nav-item nav-link" href="#.php">Group<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
			</nav>
		<?php
			if(isset($_SESSION['status'])) {
				echo $_SESSION['status'];
				unset($_SESSION['status']);
			}
		?>	
  		<table class="table table-light table-bordered table-hover">
  			<thead class="thead-dark">
  				<tr>
					<th scope="col">Date Created</th>
					<th scope="col">Title</th>
					<th scope="col">Description</th>
					<th scope="col">Facility</th>
					<th scope="col">Number of Participants</th>
					<th scope="col">Date of the Event</th>
					<th scope="col">Requester Name</th>
					<th scope="col">Email</th>
					<th scope="col">Contact Number</th>
					<th scope="col">Letter of Request</th>
					<th scrope="col">Remarks</th>
					<th scrope="col">Edit</th>
				</tr>
			</thead>
			<tbody>
  				<?php
					include_once('../dbcon.php');
					$sql = $conn->query("SELECT * FROM group_requests");

					while ($row = mysqli_fetch_array($sql)) {
						?>
						<tr>
							<td><?php echo $row['date_createdgrp']?></td>
							<td><?php echo $row['title']?></td>
							<td><?php echo $row['desc_grp']?></td>
							<td><?php echo $row['facility_use']?></td>
							<td><?php echo $row['num_par']?></td>
							<td><?php echo $row['event_dt']?></td>
							<td><?php echo $row['req_name'];?></td>
							<td><?php echo $row['email_add']?></td>
							<td><?php echo $row['con_num']?></td>
							<td><a href="../upload/<?php echo $row['doc_upl']; ?>" download>Download</a></td>
							<td><?php echo $row['remarks']?></td>
							<td>
								<a href ="remarks_grp.php?updateid=<?php echo $row['id']; ?>" 
								class = "btn btn-success">Approve</a>
								<br>
								<a href ="remarks_grpdp.php?updateid=<?php echo $row['id']; ?>" 
								class = "btn btn-warning">Disapprove</a>
								<br><br>
								<a href ="remarks_delgrp.php?deleteid=<?php echo $row['id']; ?>" 
								class = "btn btn-danger">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
<div>
	    </section>
	    
	    <footer class="footer text-center py-2 theme-bg-dark">
		   
	    <small class="copyright">BSIT 4th Year |<a href="http://anselmolupague.neocities.org/" target="_blank"> RVMSC SchedSys</a> | ©2020 All Rights Reserved.</small>
		   
	    </footer>
    
</div><!--//main-wrapper-->
</body>
</html> 