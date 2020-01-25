<!doctype html>
 <html>
  <head>
      <title>User</title>
	  <link rel ="stylesheet" href="css/bootstrap.min.css">
	  <link rel ="stylesheet" href="css/style.css">
	 
	  
  <style>
  
  </style>
  <script>
			
		</script>
  </head>
  <body>
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
	
<!---------------------------------Student Profile------------------------------------->
	<div class="container bg-light col-5">
		<div class="form-hrizontal">
			<div class="form-group">
								
				<?php
					include '../controller/MyController.php';
					$obj=new MyController();
					session_start();
					$result=$obj->stdprofile($_SESSION['id']);
					while($row=mysqli_fetch_assoc($result))
					{
				?>
					<h1><?php echo $row['name'];?></h1><br>
						<div class="form-group">
                        <label  class="col-sm-3 control-label">Std_id</label>
                    <div class="col-sm-8">
                        <input type="text" id="std_id" class="form-control" name="std_id" value="<?php echo $row['std_id'];?>" readonly>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Register No</label>
                    <div class="col-sm-8">
                        <input type="text" id="regno" class="form-control" name= "regno" value="<?php echo $row['regno'];?>"readonly>
                    </div>
                </div>
				 
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-8">
                        <input type="text" id="name" class="form-control" name= "name" value="<?php echo $row['name'];?>"readonly>
                    </div>
                </div>
				<div class="form-group">
                    <label for="qualification" class="col-sm-3 control-label">Mobile No</label>
                    <div class="col-sm-8">
                        <input type="text" id="mobile" class="form-control" name="mobile" value="<?php echo $row['mobile'];?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="qualification" class="col-sm-3 control-label">Department</label>
                    <div class="col-sm-8">
                        <input type="text" id="birthDate" class="form-control" name="department" value="<?php echo $row['department'];?>" readonly>
                    </div>
                </div>
					<div class="form-group">
                    <label for="qualification" class="col-sm-3 control-label">Course</label>
                    <div class="col-sm-8">
                        <input type="text" id="course" class="form-control" name="course" value="<?php echo $row['course'];?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" id="email" class="form-control" name="email" value="<?php echo $row['email'];?>" readonly>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Semester No</label>
                    <div class="col-sm-8">
                        <input type="text" id="semesterno" class="form-control" name="semester" value="<?php echo $row['semester'];?>" readonly>
                       </div>
                </div>
				<div class="form-group">
                    <label for="qualification" class="col-sm-3 control-label">Year</label>
                    <div class="col-sm-8">
                        <input type="text" id="year" class="form-control" name="year" value="<?php echo $row['year'];?>" readonly>
                    </div>
                </div>
				
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" id="username" class="form-control" name="username" value="<?php echo $row['username'];?>" readonly>
                    </div>
                </div>
				<div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" id="password" class="form-control" name="password" value="<?php echo $row['password'];?>" readonly>
                    </div>
			
				<?php
					}
				?>
			</div>
		</div>
	</div>
  </body>
</html>