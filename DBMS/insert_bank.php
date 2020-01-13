<?php
	$user_name = "root";
	$password="";
	$servername="localhost";
	$database ="svs";
	$bank_no=$_POST['bank_no'];
	$bank_name=$_POST['bank_name'];
	$conn = mysqli_connect($servername,$user_name,$password,$database);
	if(!$conn){
		die("connection failed: " . mysqli_connect_error());
	}
	else{
	if($bank_no != NULL){
				$sql = "INSERT INTO bank VALUES('$bank_name',$bank_no)";
				if(mysqli_query($conn,$sql)){
					header("Location: insert.html");
					}
				else{
					header("Location: insert.html");
					$loc=1;


				}
		}
	}			
?>