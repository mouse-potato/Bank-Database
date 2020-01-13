<?php
	$user_name = "root";
	$password="";
	$servername="localhost";
	$database ="svs";
	$bank_no=$_POST['bank_no'];
	
	$conn = mysqli_connect($servername,$user_name,$password,$database);
	if(!$conn){
		die("connection failed: " . mysqli_connect_error());
	}
	else{
	if($bank_no != NULL){
				$sql = "DELETE FROM bank WHERE Bank_No ='$bank_no'";
				if(!mysqli_query($conn,$sql)){
					header("Location: delete.html");
					}
				else{
					header("Location: delete.html");


				}
		}
	}			
?>