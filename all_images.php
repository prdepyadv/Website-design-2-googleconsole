<?php

session_start();
$username = $_POST['username']; 

if(isset($username))
{
	if($username == "prdepyadv")
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
					$sql_e = "SELECT image_path FROM Test";
					$result_e = mysqli_query($conn,$sql_e);
					while ($row = mysqli_fetch_assoc($result_e))
					{						
						echo "/Website-design-2/uploads/".$row["image_path"]."\n";
					}
				}
	}	
}
?>
