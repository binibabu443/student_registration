<!--------  studentprofile  -------->


<!doctype html>
 <html>
  <head>
      <title>admin</title>
	  <link rel ="stylesheet" href="css/bootstrap.min.css">
	  <link rel ="stylesheet" href="css/style.css">
	 
	  
  <style>
  
  </style>
  <script>
			
		</script>
  </head>
  <body>
  <?php
		session_start();
		?>
  <div>
		<div class="container-fluid">
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow bg-gradient-primary">
		<!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle  bg-light">
            <i class="fa fa-bars"></i>
          </button>
		 <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto pr-5 p-hide">

            <!-- Nav Item - Alerts -->
           <li class="nav-item ">
              <a class="nav-link " href="studenthome.php">
                <i class="fas fa-home"><p> Home</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="studentprofile.php">
                <i class="fas fa-home"><p>My Profile</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="studentmark.php">
                <i class="fas fa-home"><p>View Mark</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="viewsubject.php">
                <i class="fas fa-home"><p>View Subject</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="viewnotice.php">
                <i class="fas fa-home"><p>View Notice</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="viewtimetable.php">
                <i class="fas fa-home"><p>View Timetable</p></i>
              </a>
            </li>
			
			<li class="nav-item ">
              <a class="nav-link " href="login.php">
                <i class="fas fa-home"><p> Logout</p></i>
              </a>
            </li>
          </ul>

        </nav>
		</div>
		<?php
						include '../controller/MyController.php';
						$obj=new MyController();
						
						$result=$obj->timetableview($_SESSION['semester']);
						while($row=mysqli_fetch_assoc($result))
						{
							
						
		?>

		<table class="table table-striped card-text bg-light">
		<thead>
			<tr>
				
				<th></th>
				<th>Day</th>
				<th>Department</th>
				<th>Hour1</th>
				<th>Hour2</th>
				<th>hour3</th>
				<th>hour4</th>
				<th>semester</th>
				<th>admin_id</th>
				
			</tr>
		</thead>
			<tbody>
								
				
						<tr>
						<form>
							<td scope="row"><?php echo $row['day'];?></td>
							<td scope="row"><?php echo $row['department'];?></td>
							<td scope="row"><?php echo $row['hour1'];?></td>
							<td scope="row"><?php echo $row['hour2'];?></td>
							<td scope="row"><?php echo $row['hour3'];?></td>
							<td scope="row"><?php echo $row['hour4'];?></td>
							<td scope="row"><?php echo $row['semester'];?></td>
							<td scope="row"><?php echo $row['admin_id'];?></td>
						</form>
						</tr>
						
					</tbody>
					
				</table>
	
		<?php
							}
						?>
						
			
		
			
	
	
	</div>
  </body>
</html>