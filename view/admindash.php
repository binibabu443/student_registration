<!DOCTYPE html>
<html>
	<head>
		<title> Admin </title>
	</head>
	<body>
		<form method=POST>
			<input type="text" placeholder="username" name="username"><br><br>
			<input type="text" placeholder="password" name="password"><br><br>
			<input type="submit" name="submit" value="submit">
		</form>
		<?php 
			if(isset($_POST['update']))
			{
				include '../controller/MyController.php';
				$obj=new MyController;
				$obj->Update($_POST['user']);
			}
		?>
	</body>
</html>