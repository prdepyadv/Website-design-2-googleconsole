<?php

include email_val.php;

$id = $_POST["id"];
 $first = $_POST["first"];
$last = $_POST["last"];
$email = $_POST["email"];
$dob = $_POST["dob"];
$Phone = $_POST["Phone"];
$username = $_POST["username"];
	

if(isset($username)){

	$host="35.226.43.57";$dbusername="rooot";$dbpassword="Prdep@123";$dbname="practice";

    $conn=new mysqli ($host ,$dbusername,$dbpassword,$dbname);
	if(mysqli_connect_error())
	    {
			die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	    }
	else
		{
            $sql="UPDATE Test SET first = '".$first."', last= '".$last."', email= '".$email."', dob = '".$dob."', Phone = '".$Phone."' WHERE id = '".$id."'";
		
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
