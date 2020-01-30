<?php

$username = $_POST['username']; 
$password = $_POST['password'];

$username = str_replace("'"," ",$username);
$password = str_replace("'"," ",$password);


if(isset($username) and isset($password))
{
	$host="34.69.140.33";$dbusername="rooot";$dbpassword="Prdep@123";$dbname="practice";
	$conn=new mysqli ($host ,$dbusername,$dbpassword,$dbname);
	
	$ciphering = "BF-CBC";
	$iv_length = openssl_cipher_iv_length($ciphering); 
	$options = 0;
	$decryption_iv = random_bytes($iv_length); 
	$decryption_key = openssl_digest(php_uname(), 'MD5', TRUE); 
	$password = openssl_decrypt ($password, $ciphering, $decryption_key, $options, $encryption_iv);
	
	if(mysqli_connect_error())
	    {
			die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	    }
	else
		{
			$sql_e = "SELECT * FROM Test WHERE username = '".$username."' and password = '".$password."'";
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
