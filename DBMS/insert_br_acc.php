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
	if($ifsc != NULL and $accno!= NULL){
				$sql = "INSERT INTO br_acc VALUES('$ifsc','$accno')";
				if(mysqli_query($conn,$sql)){
					header("Location: insert.html");
					}
				else{
					header("Location: insert.html");

				}
		}
	}			
?>