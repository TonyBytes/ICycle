<?php 
require "db_connect.php";

$name = "prawn";
$pass = "pass";

$sql_query = "Select * from User where username like '$name' AND password like '$pass';";

$result = mysqli_query($con,$sql_query);

if(mysqli_num_rows($result)>0) {

	$row = mysqli_fetch_assoc($result);
	$name1 = $row['username'];
	echo "<h3> Welcome ".$name1."</h3>";
	}else{
	echo "no information avail";
	}


?>