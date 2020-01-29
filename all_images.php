<?php

$host="34.69.140.33";
$dbusername="rooot";
$dbpassword="Prdep@123";
$dbname="practice";
$conn=new mysqli ($host ,$dbusername,$dbpassword,$dbname);

	if(mysqli_connect_error())
	       {
			die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	        }
	else
		{
			$sql_e = "SELECT image_path FROM Test";
			$result_e = mysqli_query($conn,$sql_e);
			$row = mysqli_fetch_assoc($result_e);
			echo $row[0];
		}
?>
