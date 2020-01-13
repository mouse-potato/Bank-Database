<?php
	$user_name = "root";
	$password="";
	$servername="localhost";
	$database ="svs";
	$ano =$_POST['ano'];
	$cadep=$_POST['cadep'];
	$chdep=$_POST['chdep'];
	$cshwith=$_POST['cshwith'];
	$custid=$_POST['custid'];
	$conn = mysqli_connect($servername,$user_name,$password,$database);
	if(!$conn){
		die("connection failed: " . mysqli_connect_error());
	}
	else{
	if($custid != NULL and $ano!=NULL){
				$sql = "INSERT INTO transaction VALUES('$chdep','$cadep','$cshwith',$custid,'$ano');";
				if(mysqli_query($conn,$sql)){
					header("Location: insert.html");
		}		else{
					header("Location: insert.html");

				}
		}
	}			
?>