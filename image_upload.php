<?php

	$email = $_POST["email"];
	$file_name= $_FILES['pic']['name'];

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
		$new_file_name=$random_digit.'-'.$file_name;
		$path= "/var/www/html/uploads/".$new_file_name;
		if(move_uploaded_file($_FILES['pic']['tmp_name'] , $path))
		{echo "The file has been uploaded.";}
		else
		{echo "Sorry, there was an error uploading your file.";}
		
		
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
