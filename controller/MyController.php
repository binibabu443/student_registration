<?php
include '../config/connection.php';
class MyController
{
	function student()
	{
			$std_id=$_POST['std_id'];
			$regno=$_POST['regno'];
			$name=$_POST['name'];
			$mobile=$_POST['mobile'];
			$department=$_POST['department'];
			$course=$_POST['course'];
			$email=$_POST['email'];
			$semester=$_POST['semester'];
			$year=$_POST['year'];
			$username=$_POST['username'];
			$password=$_POST['password'];

			include '../model/mymodel.php';
			$mod=new MyModel();
			$mod->insertstudent($std_id,$regno,$name,$mobile,$department,$course,$email,$semester,$year,$username,$password);
	}
	function LoadFirst()
	{
		header('location:view/login.php');
	}
	
	function LoginAct()
	{
			$uname=$_POST['username'];
			$pwd=$_POST['password'];

			include '../model/mymodel.php';
			$mod=new MyModel();
			$mod->logincheck($uname,$pwd);
		
	}
	
	function addcourse()
	{
			$coursename=$_POST['coursename'];
			$department=$_POST['department'];

			include '../model/mymodel.php';
			$mod=new MyModel();
			$mod->insertcourse($coursename,$department);
		
	}
	
	function passwordchange($username,$email,$password)
	{
			include '../model/mymodel.php';
			$mod=new MyModel();
			$mod->changepwd($username,$email,$password);
		
	}
	
	function mark()
	{
			$resid=$_POST['resid'];
			$registerno=$_POST['registerno'];
			$std_id=$_POST['std_id'];
			$course=$_POST['course'];
			$name=$_POST['name'];
			$subject=$_POST['subject'];
			$result=$_POST['result'];
			$credit=$_POST['credit'];
			$totalgpa=$_POST['totalgpa'];
			

			include '../model/mymodel.php';
			$mod=new MyModel();
			$mod->addmark($resid,$registerno,$std_id,$course,$name,$subject,$result,$credit,$totalgpa);
	}
	
	function stdprofile($id)
	{
			include '../model/mymodel.php';
			$mod=new MyModel();
			$result=$mod->studentprofile($id);
			return $result;
		
	}
	
	
	function addsubject()
	{
			$course=$_POST['course'];
			$department=$_POST['department'];
			$subjectname=$_POST['subjectname'];
			$subjectcode=$_POST['subjectcode'];
			$semester=$_POST['semester'];
			$credit=$_POST['credit'];

			include '../model/mymodel.php';
			$mod=new MyModel();
			$mod->insertsubject($course,$department,$subjectname,$subjectcode,$semester,$credit);
		
	}
	
	function Getdept($id)
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$result=$mod->getdepartment($id);
			return $result;
		}
	function Studentsubject($dept)
	{
		#include '../model/MyModel.php';
		$m=new MyModel();
		$r=$m->StudSubject($dept);
		return $r;
	}
	

	function studentresult($id)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$result=$mod->studentresult($id);
		return $result;
	}

	function addadmin()
	{
			
			$username=$_POST['username'];
			$password=$_POST['password'];

			include '../model/mymodel.php';
			$mod=new MyModel();
			$mod->insertadmin($username,$password);
	}
	
	function viewadmin()
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$result=$mod->view();
		return $result;
	}

	function removeadmin($id)
	{
		#include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->remove($id);
		
	}
	
	function addnotice()
	{
			$title=$_POST['title'];
			$beginningdate=$_POST['beginningdate'];
			$author=$_POST['author'];
			$endingdate=$_POST['endingdate'];
			$description=$_POST['description'];
			$semester=$_POST['semester'];
		

			include '../model/mymodel.php';
			$mod=new MyModel();
			$mod->insertnotice($title,$beginningdate,$author,$endingdate,$description,$semester);
		
	}
	
	
	function noticeview($semester)
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$result=$mod->viewnoti($semester);
			return $result;
		}
		
		function addtimetable()
	{
			$day=$_POST['day'];
			$department=$_POST['department'];
			$hour1=$_POST['hour1'];
			$hour2=$_POST['hour2'];
			$hour3=$_POST['hour3'];
			$hour4=$_POST['hour4'];
			$semester=$_POST['semester'];
			$admin_id=$_POST['admin_id'];
		

			include '../model/mymodel.php';
			$mod=new MyModel();
			$mod->inserttimetable($day,$department,$hour1,$hour2,$hour3,$hour4,$semester,$admin_id);
		
	}
	
	function timetableview($semester)
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$result=$mod->viewtt($semester);
			return $result;
		}
	
}


?>