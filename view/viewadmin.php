<!--------  addcourse  -------->
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
							<th>Id</th>
							<th>Username</th>
							<th>Password</th>
						</tr>
					</thead>
					<tbody>
					<?php
						require_once'../controller/MyController.php';
						$obj=new MyController();
						$result=$obj->viewadmin();
						while($row=mysqli_fetch_assoc($result))
						{
					?>
					<tr>
						<form method="POST">
								<td scope="row"><input type="text" value="<?php echo $row['admin_id'];?>" name="id">

						
								<td><?php echo $row['username'];?></td>
								<td><?php echo $row['password'];?></td>
								<td><input type="submit" value="Remove"class="btn-danger" name="remove"></td>
						</form>
					</tr>
					<?php
						}
						if(isset($_POST['remove']))
						{
							$obj->removeadmin($_POST['id']);
						}
					?>

				</tbody>	
					
					<td></td>
				</table>
			</div>
	</div>
  </body>
</html>