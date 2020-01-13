<?php
	$user_name = "root";
	$password="";
	$servername="localhost";
	$database ="svs";
	$ifsc=$_POST['ifsc'];
	$lid=$_POST['lid'];
	$conn = mysqli_connect($servername,$user_name,$password,$database);
	if(!$conn){
		die("connection failed: " . mysqli_connect_error());
	}
	else{
	if($lid != NULL && $ifsc != NULL){
				$sql = "DELETE FROM br_loan WHERE IFSC =$ifsc ";
				if(mysqli_query($conn,$sql)){
					header("Location: delete.html");
					}
				else{
					header("Location: delete.html");

				}
		}
	}			
?>