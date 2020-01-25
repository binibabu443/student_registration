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
  <div>
		<div class="container-fliud">
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
		

		<table class="table table-striped card-text bg-light">
		<thead>
			<tr>
				
				<th>Register Number</th>
				<th>Subject</th>
				<th>Result</th>
				<th>Credit</th>
				<th>Totalgpa</th>
				
			</tr>
		</thead>
			<tbody>
								
				<?php
						include '../controller/MyController.php';
						$obj=new MyController();
						session_start();
						$result=$obj->studentresult($_SESSION['id']);
						while($row1=mysqli_fetch_assoc($result))
						{
						?>
						<tr>
						<form>
							<td scope="row"><?php echo $row1['registerno'];?></td>
							<td scope="row"><?php echo $row1['subject'];?></td>
							<td scope="row"><?php echo $row1['result'];?></td>
							<td scope="row"><?php echo $row1['credit'];?></td>
							<td scope="row"><?php echo $row1['totalgpa'];?></td>
						</form>
						</tr>
						<?php
							}
						?>
					</tbody>
		</table>
		</div>
	
	
	
	</div>
  </body>
</html>