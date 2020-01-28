<?php

	$email = $_POST["email"];
	$file_name= $_FILES['image']['name'];
	echo var_dump($_FILES["image"]);
	echo "check";

if(isset($email)){

$host="34.69.140.33";$dbusername="rooot";$dbpassword="Prdep@123";$dbname="practice";

    $conn=new mysqli ($host ,$dbusername,$dbpassword,$dbname);
	if(mysqli_connect_error())
	    {
			die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	    }
	else
		{
		$random_digit=rand(0000,9999);
		$new_file_name=$random_digit.$file_name;
		$path= "upload/".$new_file_name;
            $sql="UPDATE Test SET image_path = '".$new_file_name."' WHERE email = '".$email."';";
		
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
echo "<script>alert('error')</script>","<script>window.location.replace('http://34.69.140.33/Website-design-2/index.php')</script>";
 die();
}
  
?>
