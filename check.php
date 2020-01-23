<?php
$first=filter_input(INPUT_POST,'first');
$last=filter_input(INPUT_POST,'last');
$email=filter_input(INPUT_POST,'email');
$password=filter_input(INPUT_POST,'password');
$dob=filter_input(INPUT_POST,'dob');


	$host="localhost";
	$dbusername="id12327853_root";
	$dbpassword="12345";
	$dbname="id12327853_practice";
	 
	//connection

	$conn=new mysqli ($host ,$dbusername,$dbpassword,$dbname);
			if(mysqli_connect_error())
				{
				die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
				}
			else
				{
					$sql="INSERT INTO Test(first,last,email,password,dob) VALUES ('$first','$last','$email','$password','$dob')";
						if($conn->query($sql))
						{
							echo "<script>alert('success')</script>","<script>window.location.replace('https://ppyy.000webhostapp.com/')</script>";
						}
						else
						{
						echo "Error: ".$sql."<br>".$conn->error;
						}
						$conn->close();
				}
die();
?>