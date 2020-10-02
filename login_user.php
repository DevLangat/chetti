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
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 // Getting the received JSON into $json variable.
 $json = file_get_contents('php://input');

 // Decoding the received JSON and store into $obj variable.
 $obj = json_decode($json,true);

 // Getting User email from JSON $obj array and store into $email.
 $email = $obj['Username'];


 // Getting Password from JSON $obj array and store into $password.
 $password = $obj['Password'];

 //Applying User Login query with email and password.
 $loginQuery = "select * from tblUser where Username = '$email' and Password = '$password' ";

 // Executing SQL Query.
 $check = mysqli_fetch_array(mysqli_query($con, $loginQuery));

	if(isset($check)){

		 // Successfully Login Message.
		 $onLoginSuccess = 'Login Matched';

		 // Converting the message into JSON format.
		 $SuccessMSG = json_encode($onLoginSuccess);

		 // Echo the message.
		 echo $SuccessMSG ;

	 }

	 else{

		 // If Email and Password did not Matched.
		$InvalidMSG = 'Invalid Username or Password Please Try Again' ;

		// Converting the message into JSON format.
		$InvalidMSGJSon = json_encode($InvalidMSG);

		// Echo the message.
		 echo $InvalidMSGJSon ;

	 }

 mysqli_close($con);
?>