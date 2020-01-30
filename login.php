<?php

$username = $_POST['username']; 
$password = $_POST['password'];

$username = str_replace("'"," ",$username);
$password = str_replace("'"," ",$password);


if(isset($username) and isset($password))
{
	$host="34.69.140.33";$dbusername="rooot";$dbpassword="Prdep@123";$dbname="practice";
	$conn=new mysqli ($host ,$dbusername,$dbpassword,$dbname);
	
	if(mysqli_connect_error())
	    {
			die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	    }
	else
		{
			$sql_e = "SELECT password FROM Test WHERE username = '".$username."'";
			$result_e = mysqli_query($conn,$sql_e);
			$row = mysqli_fetch_assoc($result_e);
			echo password_verify($password,$row["password"]);
		}

}
else
{
echo "<script>alert('error')</script>","<script>window.location.replace('http://34.69.140.33/Website-design-2/index.php')</script>";
}

    die();	

?>
