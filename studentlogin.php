

<?php
session_start();
include('dbconfig.php');
$error='';


if (isset($_POST['login'])){

    $username=$_POST['username'];
    $password=$_POST['password'];
 $username = stripslashes($username);
$password = stripslashes($password);

    
    $login_query=mysqli_query($con,"select * from tblStudents where RegNo='$username' and password='$password'");
    $count=mysqli_num_rows($login_query);
   // $row=mysqli_fetch_array($login_query);
    $row = $login_query->fetch_assoc(); 
    
    
    if ($count > 0){
       $_SESSION['login_user']=$username;
     

    echo "<script type='text/javascript'>document.location.href='dashboard.php';
</script>";
   

    
    }else{
    $error = "Username or Password is invalid";
    
    $message = "Invalid Credentials";
echo "<script type='text/javascript'>alert('$message');
document.location.href='studentLogin.html';
</script>";
die();

   }
    }




?>
