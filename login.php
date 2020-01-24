<?php

	$email = $_POST["email"];
	$password = $_POST["password"];
	$host="localhost";
	$dbusername="id12327853_p";
	$dbpassword="12345";
	$dbname="id12327853_root";
    
    $conn=new mysqli ($host ,$dbusername,$dbpassword,$dbname);
	if(mysqli_connect_error())
	    {
			die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	    }
	else
		{
			$sql_e = "SELECT * FROM Test WHERE email = '".$email."' and password = '".$password."'";
			$result_e = mysqli_query($conn,$sql_e);
			echo mysqli_num_rows($result_e);
		}
   
    die();	

?>