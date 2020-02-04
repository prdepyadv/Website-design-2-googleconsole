

<?php

	$username = $_POST["username"];
$id = $_POST["id"];
if(isset($username)){

$host="35.226.43.57";$dbusername="rooot";$dbpassword="Prdep@123";$dbname="practice";
    
    $conn=new mysqli ($host ,$dbusername,$dbpassword,$dbname);
	if(mysqli_connect_error())
	    {
			die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	    }
	else
		{
			$sql_e = "DELETE FROM Test WHERE id = '".$id."'";
			$result_e = mysqli_query($conn,$sql_e);
			mysqli_num_rows($result_e);
		}}
   
    die();	

?>
