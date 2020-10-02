<?php
//Define your Server host name here.
 $HostName = "localhost";

 //Define your MySQL Database Name here.
 $DatabaseName = "id14332443_testflutter_db";

 //Define your Database User Name here.
 $HostUser = "id14332443_myuser";

 //Define your Database Password here.
 $HostPass = "Admin@123456";

 // Creating MySQL Connection.
 $db = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

	if (!$db) {
		echo "Database connection failed";
	}

	$image = $_FILES['image']['name'];
	$name = $_POST['name'];

	$imagePath = 'uploads/'.$image;
	$tmp_name = $_FILES['image']['tmp_name'];

	move_uploaded_file($tmp_name, $imagePath);

	$db->query("INSERT INTO tblimage(name,image,path)VALUES('".$name."','".$image."','".$imagePath."')");


?>