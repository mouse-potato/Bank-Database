<?php
	$user_name = "root";
	$password="";
	$servername="localhost";
	$database ="svs";
	$accbal=$_POST['accbal'];
    $accno=$_POST['accno'];
    $atype=$_POST['atype'];
	$custid=$_POST['custid'];
	$conn = mysqli_connect($servername,$user_name,$password,$database);
	if(!$conn){
		die("connection failed: " . mysqli_connect_error());
	}
	else{
	if($custid != NULL and $accno!=NULL){
				$sql = "INSERT INTO account VALUES('$accbal','$accno','$atype','$custid')";
				if(mysqli_query($conn,$sql)){
					header("Location: insert.html");
					}
				else{
					header("Location: insert.html");

				}
		}
	}			
?>