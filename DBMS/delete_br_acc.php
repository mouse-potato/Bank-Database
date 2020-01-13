<?php
	$user_name = "root";
	$password="";
	$servername="localhost";
	$database ="svs";
	$ifsc=$_POST['ifsc'];
	$accno=$_POST['accno'];
	$conn = mysqli_connect($servername,$user_name,$password,$database);
	if(!$conn){
		die("connection failed: " . mysqli_connect_error());
	}
	else{
	if($accno != NULL && $ifsc != NULL){
				$sql = "DELETE FROM br_acc WHERE IFSC =$ifsc ";
				if(!mysqli_query($conn,$sql)){
					header("Location: delete.html");
					}
				else{
					header("Location: delete.html");


				}
		}
	}			
?>