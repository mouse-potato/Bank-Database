<?php
	$user_name = "root";
	$password="";
	$servername="localhost";
	$database ="svs";
	$gen=$_POST['gen'];
    $cname=$_POST['cname'];
    $dob=$_POST['dob'];
    $age=$_POST['age'];
	$custid=$_POST['custid'];
	// $dob='"'.$dob.'"';
	// $age='"'.$age.'"';
	// $custid='"'.$custid.'"';
	$conn = mysqli_connect($servername,$user_name,$password,$database);
	if(!$conn){
		die("connection failed: " . mysqli_connect_error());
	}
	else{
	if($custid != NULL){
				$sql = "INSERT INTO customer VALUES('$custid','$gen','$cname','$dob','$age')";
				if(mysqli_query($conn,$sql)){
					header("Location: insert.html");
					}
				else{
					header("Location: insert.html");

				}
		}
	}			
?>