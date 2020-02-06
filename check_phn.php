<?php
session_start();
$username = $_SESSION["username"];
if(isset($username))
{
	$host="35.226.43.57";
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
			$sql_e = "SELECT * FROM Test WHERE username = '".$username."'";
			$result_e = mysqli_query($conn,$sql_e);
			$row = mysqli_fetch_assoc($result_e);
			if(! is_null ( $row["Phone"] ))
			{
				echo "/Website-design-2/uploads/".$row["image_path"];	
			}
		        else
			{
				echo 0;
			}
		}
   
}
else{
echo "<script>alert('error')</script>","<script>window.location.replace('http://35.226.43.57/Website-design-2/index.php')</script>";
}
die();	

?>
