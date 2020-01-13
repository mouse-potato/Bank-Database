<?php
	$user_name = "root";
	$password="";
	$servername="localhost";
	$database ="svs";
	$accno=$_POST['accno'];
	$conn = mysqli_connect($servername,$user_name,$password,$database);
	if(!$conn){
		die("connection failed: " . mysqli_connect_error());
	}
	else{
	if($accno != NULL){
				$sql = "DELETE FROM account WHERE Number =$accno ";
				if(!mysqli_query($conn,$sql)){
					header("Location: delete.html");
					}
				else{
					header("Location: delete.html");


				}
		}
	}			
?>