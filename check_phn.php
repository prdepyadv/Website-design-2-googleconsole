<?php

	$email = $_POST["email"];
if(isset($email))
{
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
   
}
else{
echo "<script>alert('error')</script>","<script>window.location.replace('http://34.69.140.33/Website-design-2/index.php')</script>";
}
die();	

?>
