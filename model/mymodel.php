<?php
class MyModel
{

	function insertstudent($std_id,$regno,$name,$mobile,$department,$course,$email,$semester,$year,$user,$pass)
	{
		include '../config/connection.php';
		$sql="insert into student (std_id,regno,name,mobile,department,course,email,semester,year,username,password)values('".$std_id."','".$regno."','".$name."','".$mobile."','".$department."','".$course."','".$email."','".$semester."','".$year."','".$user."','".$pass."')";
		if(mysqli_query($conn,$sql))
		{
			#header('location:registration.php');
		}
		else
		{
			echo 'error';                                                        				
		}
	}
	
	function logincheck($uname,$pwd)
	{
		include '../config/connection.php';
		$sql="select * from admin where username='".$uname."' AND password='".$pwd."'";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				header('location:adminhome.php');
			}
		}
		else
		{
			$sql="select * from student where username='".$uname."' AND password='".$pwd."'";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0)
			{
				session_start();
				$row=mysqli_fetch_assoc($result);
				$_SESSION['id']=$row['std_id'];
				$_SESSION['semester']=$row['semester'];
				header('location:studenthome.php');
				
			}	
		
			else
			{
				$sql="select * from superuser where username='".$uname."' AND password='".$pwd."'";
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0)
				{
					session_start();
					$row=mysqli_fetch_assoc($result);
					$_SESSION['id']=$row['std_id'];
					header('location:superuserhome.php');
				
				}	
			}
		
		}
		}
	
	function insertcourse($coursename,$department)
	{
		include '../config/connection.php';
		$sql="insert into addcourse (coursename,department)values('".$coursename."','".$department."')";
		if(mysqli_query($conn,$sql))
		{
			#header('location:registration.php');
		}
		else
		{
			echo 'error';
		}
	}
	
	function changepwd($user,$pass)
	{
		include '../config/connection.php';
		$sql="update student SET username='".$user."' AND password='".$pass."'";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				header('location:forgotpassword.php');
			}
		}
	}
	
	function addmark($resid,$registerno,$std_id,$course,$name,$subject,$result,$credit,$totalgpa)
	{
		include '../config/connection.php';
		$sql="insert into mark (resid,registerno,std_id,course,name,subject,result,credit,totalgpa)values('".$resid."','".$registerno."','".$std_id."','".$course."','".$name."','".$subject."','".$result."','".$credit."','".$totalgpa."')";
		if(mysqli_query($conn,$sql))
		{
			#header('location:registration.php');
		}
		else
		{
			echo 'error';
		}
	}
	
	function studentprofile($id)
	{
		include '../config/connection.php';
		$sql="SELECT * from student WHERE std_id='".$id."'";
		$result=mysqli_query($conn,$sql);
		return $result;
	}
	
	function insertsubject($course,$department,$subjectname,$subjectcode,$semester,$credit)
	{
		include '../config/connection.php';
		$sql="insert into addsubject (course,department,subjectname,subjectcode,semester,credit)values('".$course."','".$department."','".$subjectname."','".$subjectcode."','".$semester."','".$credit."')";
		if(mysqli_query($conn,$sql))
		{
			header('location:addsubject.php');
		}
		else
		{
			echo 'error';
		}
	}
	
	function getdepartment($id)
		{
			include '../config/connection.php';
			$sql="SELECT * FROM student where std_id='".$id."'";
			$result=mysqli_query($conn,$sql);
			return $result;
		}
		
	function StudSubject($dept)
	{
		include '../config/connection.php';
		$sql="SELECT * FROM addsubject where department='".$dept."'";
		$r=mysqli_query($conn,$sql);
		return $r;
	}

	function studentresult($id)
	{
		include '../config/connection.php';
		$sql="SELECT * FROM mark where std_id='".$id."'";
		$result=mysqli_query($conn,$sql);
		return $result;
	}
	

	function insertadmin($user,$pass)
	{
		include '../config/connection.php';
		$sql="insert into admin (username,password)values('".$user."','".$pass."')";
		if(mysqli_query($conn,$sql))
		{
			header('location:addadmin.php');
		}
		else
		{
			echo 'error';                                                        				
		}
	}

	function view()
	{
		include '../config/connection.php';
		$sql="SELECT * FROM admin ";
		$result=mysqli_query($conn,$sql);
		return $result;
	}
	
	function remove($id)
	{
		include '../config/connection.php';
		$sql="DELETE  FROM admin WHERE admin_id=$id ";
		if(mysqli_query($conn,$sql))
		{
			header('location:viewadmin.php');
		}
		else
		{
			echo 'error';                                                        				
		}
	}
	
	function insertnotice($title,$beginningdate,$author,$endingdate,$description,$semester)
	{
		include '../config/connection.php';
		$sql="insert into addnotice (title,beginningdate,author,endingdate,description,semester)values('".$title."','".$beginningdate."','".$author."','".$endingdate."','".$description."','".$semester."')";
		if(mysqli_query($conn,$sql))
		{
			#header('location:addnotice.php');
		}
		else
		{
			echo 'error';
		}
	}
	
	
	
	
	function viewnoti($semester)
		{
			include '../config/connection.php';
			$sql="SELECT * FROM addnotice where semester='".$semester."'";
			$result=mysqli_query($conn,$sql);
			return $result;
		}
		
		function inserttimetable($day,$department,$hour1,$hour2,$hour3,$hour4,$semester,$admin_id)
	{
		include '../config/connection.php';
		$sql="insert into timetable (day,department,hour1,hour2,hour3,hour4,semester,admin_id)values('".$day."','".$department."','".$hour1."','".$hour2."','".$hour3."','".$hour4."','".$semester."','".$admin_id."')";
		if(mysqli_query($conn,$sql))
		{
			#header('location:addnotice.php');
		}
		else
		{
			echo 'error';
		}
	}
	
	
	function viewtt($semester)
		{
			include '../config/connection.php';
			$sql="SELECT * FROM timetable where semester='".$semester."'";
			$result=mysqli_query($conn,$sql);
			return $result;
		}
}
	
?>