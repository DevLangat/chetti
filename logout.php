<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: studentLogin.html"); // Redirecting To Home Page
}
?>