<!doctype html>
 <html>
	<head>
		<title>Admin</title>
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
				<table class="table table-striped card-text bg-light">
					<thead>
						<tr>
							<th>Std_id</th>
							<th>regno</th>
							<th>Name</th>
							<th>Mobile</th>
							<th>Department</th>
							<th>Course</th>
							<th>Email</th>
							<th>Semester</th>
							<th>Year</th>
						</tr>
					</thead>
					<tbody>
					<?php
						require_once'../config/connection.php';
						session_start();
						$sql="select * from student";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($result))
						{
					?>
					<tr>
						<form>
								<td><?php echo $row['std_id'];?></td>
								<td><?php echo $row['regno'];?></td>
								<td><?php echo $row['name'];?></td>
								<td><?php echo $row['mobile'];?></td>
								<td><?php echo $row['department'];?></td>
								<td><?php echo $row['course'];?></td>
								<td><?php echo $row['email'];?></td>
								<td><?php echo $row['semester'];?></td>
								<td><?php echo $row['year'];?></td>
						</form>
					</tr>
					<?php
						}
					?>

				</tbody>	
					
					<td></td>
				</table>
			</div>
		</div>
	</body>
</html>