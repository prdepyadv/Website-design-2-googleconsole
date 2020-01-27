<?php

	$email = $_POST["email"];
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
			$sql_e = "SELECT Phone FROM Test WHERE email = '".$email."'";
			$result_e = mysqli_query($conn,$sql_e);
			$row = mysqli_fetch_assoc($result_e);
			if(is_null ( $row["Phone"] )){
			    echo 1;
			}
			else{
			    echo 0;
			    
			}
		}
   
    die();	

?>