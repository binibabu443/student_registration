<!doctype html>
 <html>
  <head>
      <title>ADD MARK</title>
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
                    <label for="Name" class="col-sm-3 control-label">Resid</label>
                    <div class="col-sm-8">
                        <input type="text" id="reno" class="form-control" name="resid" required autofocus>
                    </div>
                </div>
				<div class="form-group">
                    <label for="Name" class="col-sm-3 control-label">RegisterNo</label>
                    <div class="col-sm-8">
                        <input type="text" id="reno" class="form-control" name="registerno" required autofocus>
                    </div>
                </div>
               
				<div class="form-group">
                        <label  class="col-sm-3 control-label">std_id</label>
                    <div class="col-sm-8">
                        <input type="number" id="mobile" class="form-control" name="std_id" required>
                    </div>
                </div>          
                <div class="form-group">
                    <label for="nationalid" class="col-sm-3 control-label">Course</label>
                    <div class="col-sm-8">
                        <input type="text" id="department" class="form-control" name="course" required>
                    </div>
                </div>
                
				<div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Name </label>
                    <div class="col-sm-8">
                        <input type="text" id="email" class="form-control" name= "name" required>
                    </div>
                </div> 
				<div class="form-group">
                    <label for="email" class="col-sm-3 control-label">subject </label>
                    <div class="col-sm-8">
                        <input type="text" id="email" class="form-control" name= "subject" required>
                    </div>
                </div> 
				<div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Result </label>
                    <div class="col-sm-8">
                        <input type="text" id="email" class="form-control" name= "result" required>
                    </div>
                </div> 
				<div class="form-group">
                    <label for="email" class="col-sm-3 control-label">credit </label>
                    <div class="col-sm-8">
                        <input type="text" id="email" class="form-control" name= "credit" required>
                    </div>
                </div>
				<div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Totalgpa</label>
                    <div class="col-sm-8">
                        <input type="text" id="email" class="form-control" name= "totalgpa" required>
                    </div>
                </div> 
                
				<div class="form-group">
                    
					<button type="submit" class="btn btn-primary ml-5" name="addmark">Register</button>
					
				
                </div>
            </form>
			
			
			<?php
				
				if(isset($_POST['addmark']))
				{
					include '../controller/MyController.php';
					$obj=new MyController();
					$obj->mark();
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