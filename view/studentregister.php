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
                <h2>Registration</h2>
				<div class="form-group">
                    <label for="Name" class="col-sm-3 control-label">Std_id</label>
                    <div class="col-sm-8">
                        <input type="text" id="reno" class="form-control" name="std_id" required autofocus>
                    </div>
                </div>
				<div class="form-group">
                    <label for="Name" class="col-sm-3 control-label">RegisterNo</label>
                    <div class="col-sm-8">
                        <input type="text" id="reno" class="form-control" name="regno" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Name" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-8">
                        <input type="text" id="Name" class="form-control" name="name" required autofocus>
                    </div>
                </div>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Mobile</label>
                    <div class="col-sm-8">
                        <input type="number" id="mobile" class="form-control" name="mobile" required>
                    </div>
                </div>          
                <div class="form-group">
                    <label for="nationalid" class="col-sm-3 control-label">Department</label>
                    <div class="col-sm-8">
                        <input type="text" id="department" class="form-control" name="department" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="qualification" class="col-sm-3 control-label">Course</label>
                    <div class="col-sm-8">
                        <input type="text" id="course" class="form-control" name="course" required>
                    </div>
                </div>
				<div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email </label>
                    <div class="col-sm-8">
                        <input type="email" id="email" class="form-control" name= "email" required>
                    </div>
                </div> 

					<div class="form-group">
                    <label for="email" class="col-sm-3 control-label">semester </label>
                    <div class="col-sm-8">
                        <input type="text" id="semester" class="form-control" name= "semester" required>
                    </div>
                </div> 
                 
				<div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">Year</label>
                    <div class="col-sm-8">
                        <input type="text" id="year" class="form-control" name="year">
                    </div>
                </div>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" id="username" class="form-control" name="username" required>
                    </div>
                </div>
				<div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" id="password" class="form-control" name="password" required>
                    </div>
                </div>
				<div class="form-group">
                    
					<button type="submit" class="btn btn-primary ml-5" name="submit">Register</button>
				
                </div>
            </form>
			
			
			<?php
				
				if(isset($_POST['submit']))
				{
					include '../controller/MyController.php';
					$obj=new MyController();
					$obj->student();
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