<?php
	$user_name = "root";
	$password="";
	$servername="localhost";
	$database ="svs";
	$ano =$_POST['ano'];
	$clim=$_POST['clim'];
	$custid=$_POST['custid'];
	$conn = mysqli_connect($servername,$user_name,$password,$database);
	if(!$conn){
		die("connection failed: " . mysqli_connect_error());
	}
	else{
	if($ano != NULL and $custid!=NULL){
				$sql = "INSERT INTO atm VALUES('$ano','$clim','$custid');";
				if(mysqli_query($conn,$sql)){
					header("Location: insert.html");
					}
				else{
					header("Location: insert.html");
				}
		}
	}			
?>