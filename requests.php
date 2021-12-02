<?php 
session_start();

if (!isset($_SESSION["staff"])) {
  header ("Location: admin/login.php");
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
    <link rel="stylesheet" href="style.css" media="screen">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
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
            <h4><?php echo "Staff"; ?></h4>
			        <hr> 
				</div>
				
				<ul class="navbar-nav flex-column text-left">
					<li class="nav-item">
					    <a class="nav-link" i="fa" href="staff_page.php"><i class="fa fa-home" ></i> Home<span class="sr-only"></span></a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="add_staff.php"><i class="fa fa-plus"></i>	Add<span class="sr-only"></span></a>
					</li>

					<li class="nav-item active">
					    <a class="nav-link" href="requests.php"><i class="fa fa-envelope"></i>	Requests<span class="sr-only"></span></a>
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
		<?php
			if(isset($_SESSION['status'])) {
				echo $_SESSION['status'];
				unset($_SESSION['status']);
			}
		?>
		<br><br>

		<nav class="blog-nav nav nav-justified">
				<a class="nav-link-prev nav-item nav-link " href="#.php">Individual</a>
				<a class="nav-link-next nav-item nav-link " href="requests_grp.php">Group</a>
		</nav>
  		<table class="table table-light table-bordered table-hover">
  			<thead class="thead-dark">
  				<tr>
					<th scope="col">Date Created</th>
					<th scope="col">First Name</th>
					<th scope="col">Middle Name</th>
					<th scope="col">Last name</th>
					<th scope="col">Email</th>
					<th scope="col">Contact Number</th>
					<th scope="col">Facility</th>
					<th scope="col">Date Picked (date/time)</th>
					<th scrope="col">Remarks</th>
					<th scrope="col">Send to Requester</th>
				</tr>
			</thead>
			<tbody>
  				<?php
					include_once('dbcon.php');
					$sql = $conn->query("SELECT * FROM individual_requests");

					while ($row = mysqli_fetch_array($sql)) {
						?>
						<tr>
							<td><?php echo $row['date_created']?></td>
							<td><?php echo $row['fname']?></td>
							<td><?php echo $row['mname']?></td>
							<td><?php echo $row['lname']?></td>
							<td><?php echo $row['ind_email']?></td>
							<td><?php echo $row['contact_num']?></td>
							<td><?php echo $row['facility'];?></td>
							<td><?php echo $row['eventdt']?></td>
							<td><?php if (!$row['remarks']) {
								echo "<h4 align='center' style='color:blue;'>"."Pending"."</h4>";
							} else {
								echo $row['remarks'];
							}?></td>
							<td><form action="send.php" method="post">
								<input type="hidden" name="email" value="<?php echo $row['ind_email']?>">
								<input type="hidden" name="lastname" value="<?php echo $row['lname']?>">
								<input type="hidden" name="facilityname" value="<?php echo $row['facility']?>">
								<input type="hidden" name="eventdate" value="<?php echo $row['eventdt']?>">
								<input type="hidden" name="remarks" value="<?php echo $row['remarks']?>">
								<input type="hidden" name="contact_num" value="<?php echo $row['contact_num']?>">
								<input type="submit" name="send" class="btn btn-success" value="Send">
								<br>
							</form>
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

