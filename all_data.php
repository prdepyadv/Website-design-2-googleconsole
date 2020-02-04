<?php

$username = $_POST["username"];

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
                    $sql_e = "SELECT * FROM Test";
		    $i = 0;
                    $result_e = mysqli_query($conn,$sql_e);
                    while ($row = mysqli_fetch_assoc($result_e))
                    {	
			    
			    $upload + = array["id" => $row["id"],
			    "first" => $row["first"],
			    "last" => $row["last"],
			    "email" => $row["email"],
			    "password" => $row["password"],
			    "dob" => $row["dob"],
			    "register_date" => $row["register_date"],
			    "Phone" => $row["Phone"],
			    "image_path" => $row["image_path"],
			    "username" => $row["username"]];

                    }
			echo json_encode($upload);
                  }
	}	
}
?>
