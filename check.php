<?php
$first=filter_input(INPUT_POST,'first');
$last=filter_input(INPUT_POST,'last');
$email=filter_input(INPUT_POST,'email');
$password=filter_input(INPUT_POST,'password');
$dob=filter_input(INPUT_POST,'dob');

if(isset($email) and isset($password))
{
	$host="34.69.140.33";
	$dbusername="rooot";
	$dbpassword="Prdep@123";
	$dbname="practice";
	
	$x = explode("@", $email);
	$username = $x[0];
	 
	//connection

	$conn=new mysqli ($host ,$dbusername,$dbpassword,$dbname);
			if(mysqli_connect_error())
				{
				die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
				}
			else
				{
					$sql="INSERT INTO Test(first,last,email,password,dob,username) VALUES ('$first','$last','$email','$password','$dob','$username')";
						if($conn->query($sql))
						{
							echo "<script>alert('success')</script>","<script>window.location.replace('http://34.69.140.33/Website-design-2/index.php')</script>";
						}
						else
						{
						echo "Error: ".$sql."<br>".$conn->error;
						}
						$conn->close();
				}
}
else
{
echo "<script>alert('error')</script>","<script>window.location.replace('http://34.69.140.33/Website-design-2/index.php')</script>";
}
die();
?>
