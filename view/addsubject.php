<!doctype html>
 <html>
  <head>
      <title>Student Registration Form</title>
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
              <a class="nav-link " href="adminhome.php">
                <i class="fas fa-home"><p> Home</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="addcourse.php">
                <i class="fas fa-home"><p>Add course</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="studentregister.php">
                <i class="fas fa-home"><p>Student Register</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="addsubject.php">
                <i class="fas fa-home"><p> Add Subject</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="mark.php">
                <i class="fas fa-home"><p>Add mark</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="viewstudent.php">
                <i class="fas fa-home"><p>View Student</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="addnotice.php">
                <i class="fas fa-home"><p>Add Notice</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="addtimetable.php">
                <i class="fas fa-home"><p>Add Timetable</p></i>
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
		<div>
		<div class="container bg-light col-5">
          <form class="form-horizontal" name="myform" role="form" method="post">
                <h2>Add Subject</h2>
				
                <div class="form-group">
                    <label for="Name" class="col-sm-3 control-label"> Course</label>
                    <div class="col-sm-8">
                        <input type="text" id="course" class="form-control" name="course" required autofocus>
                    </div>
                </div>
				          
                <div class="form-group">
                    <label for="nationalid" class="col-sm-3 control-label">Department</label>
                    <div class="col-sm-8">
                        <input type="text" id="department" class="form-control" name="department" required>
                    </div>
                </div>
				<div class="form-group">
                    <label for="nationalid" class="col-sm-3 control-label">Subject Name</label>
                    <div class="col-sm-8">
                        <input type="text" id="subjectname" class="form-control" name="subjectname" required>
                    </div>
                </div>
				<div class="form-group">
                    <label for="nationalid" class="col-sm-3 control-label">Subject Code</label>
                    <div class="col-sm-8">
                        <input type="text" id="subjectcode" class="form-control" name="subjectcode" required>
                    </div>
                </div>
				<div class="form-group">
                    <label for="nationalid" class="col-sm-3 control-label">Semester</label>
                    <div class="col-sm-8">
                        <input type="text" id="semester" class="form-control" name="semester" required>
                    </div>
                </div>
				<div class="form-group">
                    <label for="nationalid" class="col-sm-3 control-label">Credit</label>
                    <div class="col-sm-8">
                        <input type="text" id="credit" class="form-control" name="credit" required>
                    </div>
                </div>

				
				<div class="form-group">
                    
					<button type="submit" class="btn btn-primary ml-5" name="insertsubject">Register</button>
				
                </div>
            </form>
			
			
			<?php
				
				if(isset($_POST['insertsubject']))
				{
					include '../controller/MyController.php';
					$obj=new MyController();
					$obj->addsubject();
				}
			
			?>
    </div> 
				 <!-- /.form-group -->
               
            </div>
               
			
            <!-- /form -->
 <!-- ./container -->
		
		</div>
	
	</div>
  </body>
</html>