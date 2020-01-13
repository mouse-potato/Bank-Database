<?php
	$user_name = "root";
	$password="";
	$servername="localhost";
	$database ="svs";
	$hno=$_POST['hno'];
    $city=$_POST['city'];
    $street=$_POST['street'];
	$custid=$_POST['custid'];
	$conn = mysqli_connect($servername,$user_name,$password,$database);
	$street = '"'.$street.'"';
	$city = '"'.$city.'"';


	if(!$conn){
		die("connection failed: " . mysqli_connect_error());
	}
	else{
	if($custid != NULL){
				$sql = "UPDATE temp_address SET House_no = $hno WHERE Cust_ID = $custid";
				$sql1 = "UPDATE temp_address SET Street = $street WHERE Cust_ID = $custid";
				$sql2 = "UPDATE temp_address SET City = $city WHERE Cust_ID = $custid";#"INSERT INTO temp_address VALUES('$hno','$city','$street','$custid')";
				
				if(mysqli_query($conn,$sql)&&mysqli_query($conn,$sql1)&&mysqli_query($conn,$sql2)){
					header("Location: update.html");
					//echo "done";
					}
				else{
					//header("Location: roomselect.php");
					//$loc=1;
					echo "not done";

				}
		}
	}			
?>