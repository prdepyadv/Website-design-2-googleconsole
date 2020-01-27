<?php

	$phone = $_POST["phone"];
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
            $sql="UPDATE Test SET Phone = '".$phone."' WHERE email = '".$email."';";
					if($conn->query($sql))
						{
							echo true;
						}
					else
						{
						echo "Error: ".$sql."<br>".$conn->error;
						}
			$conn->close();
		}
   
    
    die();	

?>