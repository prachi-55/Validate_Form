
<?php
include('connect.php');
  
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$dob = $_POST['dob'];
	//$have_car =$_POST['have_car'];
	//$hobbies =$_POST['hobbies'];
	
	$sql = "INSERT INTO connect (firstname,lastname,address,phone,dob)
	value('$frstname','$lastname','$address','$phone','$dob')";
	if(!mysql_query($conn,$sql))
	{
		echo "not connected";
		}
	else{
		echo "inserted";
	
	}		
header('location:index.php');
?>