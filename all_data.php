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
			    
			    $upload->id = $row["id"];
			    $upload->first = $row["first"];
			    $upload->last = $row["last"];
			    $upload->email = $row["email"];
			    $upload->password = $row["password"];
			    $upload->dob = $row["dob"];
			    $upload->register_date =$row["register_date"];
			    $upload->Phone = $row["Phone"];
			    $upload->image_path = $row["image_path"];
			    $upload->username = $row["username"];
			    $myjson->id=$i;
			    $i = $i+1;
			    $myjson->data = $upload;
			    echo json_encode($myjson);
                    }
                  }
	}	
}
?>
