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
                      echo $row[0].$row[1].$row[2].$row[3].$row[4].$row[5].$row[6].$row[7].$row[8].$row[9]."\n";
                    }
                  }
	}	
}
?>
