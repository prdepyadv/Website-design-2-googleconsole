<?php

	$phone = $_POST["phone"];
	session_start();
	$username = $_SESSION["username"];

if(isset($phone) and isset($username)){

$host="35.226.43.57";$dbusername="rooot";$dbpassword="Prdep@123";$dbname="practice";

    $conn=new mysqli ($host ,$dbusername,$dbpassword,$dbname);
	if(mysqli_connect_error())
	    {
			die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	    }
	else
		{
            $sql="UPDATE Test SET Phone = '".$phone."' WHERE username = '".$username."';";
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
}
else{
echo "<script>alert('error')</script>","<script>window.location.replace('http://35.226.43.57/Website-design-2/index.php')</script>";
 die();
}
    
   	

?>
