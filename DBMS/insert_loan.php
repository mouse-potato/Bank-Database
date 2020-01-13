<?php
	$user_name = "root";
	$password="";
	$servername="localhost";
	$database ="svs";
	$lid=$_POST['lid'];
    $lmt=$_POST['lmt'];
    $rate=$_POST['rate'];
    $lten=$_POST['lten'];
    $purp=$_POST['cltr'];
	$custid=$_POST['custid'];
	$conn = mysqli_connect($servername,$user_name,$password,$database);
	if(!$conn){
		die("connection failed: " . mysqli_connect_error());
	}
	else{
	if($custid != NULL and $lid!=NULL){
				$sql = "INSERT INTO loan VALUES('$lmt','$rate','$lten','$lid','$purp','$custid')";
				if(mysqli_query($conn,$sql)){
					header("Location: insert.html");
					}
				else{
					header("Location: insert.html");


				}
		}
	}			
?>