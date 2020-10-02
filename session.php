<?php
include('dbconfig.php');
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($con,"select * from tblStudents where RegNo='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row;
if(!isset($login_session)){
mysqli_close($con); // Closing Connection
header('Location: index.html'); // Redirecting To Home Page
}
?>