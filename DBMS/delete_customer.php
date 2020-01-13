<?php
	$user_name = "root";
	$password="";
	$servername="localhost";
	$database ="svs";
	$custid=$_POST['custid'];
	$conn = mysqli_connect($servername,$user_name,$password,$database);
	
	if(!$conn){
		die("connection failed: " . mysqli_connect_error());
	}
	else{
	if($custid != NULL){
				$sql = "DELETE FROM customer WHERE ID =$custid ";
				if(mysqli_query($conn,$sql)){
					header("Location: delete.html");
					}
				else{
					//header("Location: delete.html");
					echo "NOT SUCCESFUL";
				}
		}
	}			
?>