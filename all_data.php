<?php

$username = $_POST["username"];

if(isset($username))
{
	if($username == "prdepyadv")
	{
              $host="34.69.140.33";
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
                    $result_e = mysqli_query($conn,$sql_e);
                    while ($row = mysqli_fetch_assoc($result_e))
                    {						
                      echo $row["id"].$row["first"].$row["last"].$row["email"].$row["password"].$row["dob"].$row["register_date"].$row["Phone"].$row["image_path"].$row["username"]."\n";
                    }
                  }
	}	
}
?>
