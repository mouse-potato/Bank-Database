<?php
	$user_name = "root";
	$password="";
	$servername="localhost";
	$database ="svs";
	$hno=$_POST['hno'];
    $city=$_POST['city'];
    $street=$_POST['street'];
	$custid=$_POST['custid'];
	$conn = mysqli_connect($servername,$user_name,$password,$database);
	if(!$conn){
		die("connection failed: " . mysqli_connect_error());
	}
	else{
	if($custid != NULL){
				$sql = "INSERT INTO per_address VALUES($hno,'$city','$street','$custid')";
				
				if(mysqli_query($conn,$sql)){
					header("Location: insert.html");
					}
				else{
					header("Location: insert.html");

				}
		}
	}			
?>