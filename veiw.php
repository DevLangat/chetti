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

	$person = $db->query("SELECT * FROM tblimage");
	$list = array();

	while ($rowdata= $person->fetch_assoc()) {
		$list[] = $rowdata;
	}

	echo json_encode($list);
?>