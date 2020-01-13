<?php
	$user_name = "root";
	$password="";
	$servername="localhost";
	$database ="svs";
	
	$lid=$_POST['lid'];
	$conn = mysqli_connect($servername,$user_name,$password,$database);
	if(!$conn){
		die("connection failed: " . mysqli_connect_error());
	}
	else{
	if($lid != NULL ){
				$sql = "DELETE FROM loan WHERE Loan_ID =$lid ";
				if(mysqli_query($conn,$sql)){
					header("Location: delete.html");
					}
				else{
					header("Location: delete.html");


				}
		}
	}			
?>