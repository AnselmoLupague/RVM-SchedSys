<?php
session_start();

if (!isset($_SESSION["staff"])) {
  header ("Location: admin/login.php");
}
?>

<!DOCTYPE html>
<html>
 <head>
 <title>City Sports Complex | Staff</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/ppc-logo.png"> 
    <link rel="stylesheet" href="style.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
<?php
include('dbcon.php');
$query = $conn->query("SELECT * FROM events ORDER BY id");
?>
  <script>
    $(document).ready(function() {
     var calendar = $('#calendar').fullCalendar({
      editable:true,
      header:{
       left:'prev,next today',
       center:'title',
       right:'month,agendaWeek,agendaDay'
      },
      events: [<?php while ($row = $query ->fetch_object()) { ?>{ id : '<?php echo $row->id; ?>', title : '<?php echo $row->title; ?>', start : '<?php echo $row->start_event; ?>', end : '<?php echo $row->end_event; ?>',color : '<?php echo $row->color_evt; ?>', }, <?php } ?>],
      selectable:true,
      selectHelper:true,
      select: function(start, end, allDay)
      {
      var title = prompt("Enter Event Title");
      if(title)
      {
        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
        $.ajax({
        url:"insert.php",
        type:"POST",
        data:{title:title, start:start, end:end},
        success:function(data)
        {
          calendar.fullCalendar('refetchEvents');
          alert("Added Successfully");
          location.reload();
        }
        })
      }
      },
 
      editable:true,
      eventResize:function(event)
      {
      var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
      var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
      var title = event.title;
      var id = event.id;
      $.ajax({
        url:"update.php",
        type:"POST",
        data:{title:title, start:start, end:end, id:id},
        success:function(){
        calendar.fullCalendar('refetchEvents');
        alert('Event Update');
        }
      })
      },
 
      eventDrop:function(event)
      {
      var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
      var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
      var title = event.title;
      var id = event.id;
      $.ajax({
        url:"update.php",
        type:"POST",
        data:{title:title, start:start, end:end, id:id},
        success:function()
        {
        calendar.fullCalendar('refetchEvents');
        alert("Event Updated");
        }
      });
      },
 
      eventClick:function(event)
      {
      if(confirm("Are you sure you want to remove it?"))
      {
        var id = event.id;
        $.ajax({
        url:"delete.php",
        type:"POST",
        data:{id:id},
        success:function()
        {
          calendar.fullCalendar('refetchEvents');
          alert("Event Removed");
          window.location.replace("staff_page.php");
        }
        })
      }
      },
 
    });
  });
</script>
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
				</div><!--//profile-section-->
				
				<ul class="navbar-nav flex-column text-left">
					<li class="nav-item active">
					    <a class="nav-link" href="staff_page.php"><i class="fa fa-home"></i> Home<span class="sr-only"></span></a>
					</li>

					<li class="nav-item">
					    <a class="nav-link" href="add_staff.php"><i class="fa fa-plus"></i>	Add<span class="sr-only"></span></a>
					</li>

					<li class="nav-item">
					    <a class="nav-link" i="fa" href="requests.php"><i class="fa fa-envelope"></i>	Requests<span class="sr-only">(current)</span></a>
					</li>

					<li class="nav-item">
					    <a class="nav-link" href="admin/logout.php"><i class="fa fa-sign-out-alt"></i>	Logout<span class="sr-only"></span></a>
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
        <section class="cta-section py-5">
        <br />
        <div class="row">
          <div class="column">
          <ul class="list-group-flush">
            <li class="list-group-item"><i class="fas fa-bookmark fa-1x amber-text pr-1 icon-gym" aria-hidden="true"></i>Gym |
            <i class="fas fa-bookmark fa-1x amber-text pr-1 icon-basketball" aria-hidden="true"></i>Basketball |
            <i class="fas fa-bookmark fa-1x amber-text pr-1 icon-swimpool" aria-hidden="true"></i>Swimming Pool |
            <i class="fas fa-bookmark fa-1x amber-text pr-1 icon-volleyball" aria-hidden="true"></i>Volleyball</li>
            <form action="addEvent.php" method="POST">
              <input type="submit" class="btn btn-success" value="Add Event">
          </form>
          </ul>  
          </div>
        </div>
        <?php
			if(isset($_SESSION['status'])) {
				echo $_SESSION['status'];
				unset($_SESSION['status']);
			}
		?>
            <h1 align="center">Calendar Schedule</h1>
        <br />
            <div class="container">
                <div id="calendar"></div>
            </div>
        </section>
    <footer class="footer text-center py-2 theme-bg-dark">   
        <small class="copyright">BSIT 4th Year |<a href="http://anselmolupague.neocities.org/" target="_blank"> RVMSC SchedSys</a> | ??2020 All Rights Reserved.</small>  
    </footer>
    </div>
 </body>
</html>