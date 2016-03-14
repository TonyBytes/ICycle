<?php 
require "db_connect.php";

$name = $_POST["name"];
$username = $_POST["username"];
$pass = $_POST["password"];

$sql_query = "insert into user values('$name','$username','$pass');";

if(mysqli_query($con,$sql_query)){
//	echo "<h3> Data insertion success </h3>";
	}else{
//	echo "Data insertion error".mysqli_error($con);
	}
	

?>