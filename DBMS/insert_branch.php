<?php
	$user_name = "root";
	$password="";
	$servername="localhost";
	$database ="svs";
	$ifsc=$_POST['ifsc'];	
	$loc=$_POST['loc'];
    $bank_no=$_POST['bank_no'];
	$conn = mysqli_connect($servername,$user_name,$password,$database);
	if(!$conn){
		die("connection failed: " . mysqli_connect_error());
	}
	else{
	if($ifsc != NULL and $bank_no!=NULL){
				$sql = "INSERT INTO branch VALUES('$ifsc','$loc','$bank_no')";
				if(mysqli_query($conn,$sql)){
					header("Location: insert.html");
					}
				else{
					header("Location: insert.html");

				}
		}
	}			
?>