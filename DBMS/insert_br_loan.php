<?php
	$user_name = "root";
	$password="";
	$servername="localhost";
	$database ="svs";
	$lid=$_POST['lid'];
    $ifsc=$_POST['ifsc'];
	$conn = mysqli_connect($servername,$user_name,$password,$database);
	if(!$conn){
		die("connection failed: " . mysqli_connect_error());
	}
	else{
	if($lid != NULL and $ifsc!=NULL){
				$sql = "INSERT INTO br_loan VALUES('$lid','$ifsc')";
				if(mysqli_query($conn,$sql)){
					header("Location: insert.html");
					}
				else{
					header("Location: insert.html");

				}
		}
	}			
?>