<?php

 $HostName = "localhost";

 //Define your MySQL Database Name here.
 $DatabaseName = "id14332443_testflutter_db";

 //Define your Database User Name here.
 $HostUser = "id14332443_myuser";

 //Define your Database Password here.
 $HostPass = "Admin@123456";
 
$image = $_FILES['image']['name'];
$name = $_POST['name'];

$target_path = "image/";

$target_path = $target_path . basename( $_FILES['uploadedfilee']['name']);

if(move_uploaded_file($_FILES['uploadedfilee']['tmp_name'], $target_path))

{
// Creating MySQL Connection.
 $db = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

	if (!$db) {
		echo "Database connection failed";
	}

$sql = "INSERT INTO tblimage(name,image,path) VALUES ('".$name."','".$image."','$target_path')";

if ($db->query($sql) === TRUE) {

echo "<br><br>";

} else {

echo "Error: " . $sql . "<br>" . $db->error;

}

$sql1 = "SELECT path FROM tblimage order by id desc limit 1";

$result1 = $db->query($sql1);

if ($result1->num_rows > 0) {

// output data of each row

while($row = $result1->fetch_assoc()) {

$path=$row["path"];

echo "<img src='$path' height='280' width='320' />";

}

}

$db->close();

}

?>