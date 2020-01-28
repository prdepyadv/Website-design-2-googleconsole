<?php

    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        /*
         * Insert image data into database
         */
        
        $host     = '34.69.140.33';
        $dbUsername = 'rooot';
        $dbPassword = 'Prdep@123';
        $dbName     = 'practice';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert = $db->query("INSERT into images (image, created) VALUES ('$imgContent', '$dataTime')");
        if($insert)
        {
            echo 1;
        }
		else
		{
			echo "Error: ".$sql."<br>".$conn->error;
		}
						$conn->close();
    }
?>
