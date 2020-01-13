<?php
	$user_name = "root";
	$password="";
	$servername="localhost";
	$database ="svs";
	$ano =$_POST['ano'];
	$conn = mysqli_connect($servername,$user_name,$password,$database);
	if(!$conn){
		die("connection failed: " . mysqli_connect_error());
	}
	else{
	if($ano != NULL){
				$sql = "DELETE FROM atm WHERE ATM_No =$ano";
				if(!mysqli_query($conn,$sql)){
					header("Location: delete.html");
					}
				else{
					header("Location: delete.html");


				}
		}
	}			
?>