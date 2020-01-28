<?php

	$email = real_escape_string($_POST["email"]);
	$password = real_escape_string($_POST["password"]);
		
if(isset($email) and isset($password))
{

$host="34.69.140.33";$dbusername="rooot";$dbpassword="Prdep@123";$dbname="practice";
    
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

}
else
{
echo "<script>alert('error')</script>","<script>window.location.replace('http://34.69.140.33/Website-design-2/index.php')</script>";
}

    die();	

?>
