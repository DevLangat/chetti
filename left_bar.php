
<?php
include('dbconfig.php');
?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .dot {
  height: 55px;
  width: 150px;
  background-color: beige;
  border-radius: 45%;
  
  
}
</style>
</head>
<body>
    
<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
              
                <ul class="nav" id="main-menu">                
                
                <li> 
                       <h5 class="dot"style="padding: 20px;"> <a href="dashboard.php"><i class="fa fa-user" aria-hidden="true"> </i><b style="padding-left: 3px;"> <?php echo $login_session['name']; ?> </a></b></h5>
                    </li>
                     <li> 
                       <h3 style="padding-left: 5px;"> <a href="dashboard.php"><i class="fa fa-desktop "> </i><b style="padding-left: 3px;"> Dashboard </a></b></h3>
                    </li>
            
                   <li>
                        <a href="finance.php"><i class="fa fa-money"></i> Finance</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-institution "></i> Academics</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-hotel "></i>Hostel Booking</a>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-cog "></i>Reset Password</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out "></i>Log Out</a>
                    </li>
             
                </ul>
                 <!-- <img src="images/shopping1.jpg" width="300" height="200" alt= "shopping pic">-->
            </div>
        </nav>
              
    </body>