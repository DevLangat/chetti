<?php
include('header.php'); ?>
<?php include('left_bar.php'); ?>
<?php
include('dbconfig.php');

?>

<div id="page-wrapper" >
    <style>
        tr{
            text-transform : uppercase;
        }
    </style>
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>CHEPALUNGU TTI STUDENT PORTAL</h2>   
                    </div>
                </div>              
                  <hr />
                  
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong><h2>Welcome</h2>   </strong> <h4> Welcome to the Student portal.</h4>
                        </div>
                       
                    </div>
                    </div>

                  <!-- /. ROW  -->  <div class="row">
                  <div class="col-sm-6">
                <div class="panel panel-success">
                    <div class="panel-heading"><i class="fa fa-user" style="padding-right:6px;"></i>Basic information</div>
                    <div class="panel-body">
                        <div class="col-md-3 col-lg-3 marginbottom10" align="center">
                            
                           
                        </div>
                        <table class="table table-bordered table-condensed" >
                            <tbody>
                                <tr>
                                    <td style="font-weight: bold; color: #000000;text-transform : uppercase;">Admission No</td>
                                    <td>
                                        <span id="Main__lblNo"><?php echo $login_session['RegNo']; ?></span></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #000000;">Names</td>
                                    <td>
                                        <span id="Main__lblNames"><?php echo $login_session['name']; ?> </span></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #000000;">ID/ Passport</td>
                                    <td>
                                        <span id="Main__lblIDNo"><?php echo $login_session['IdNo']; ?></span></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #000000;">Gender</td>
                                    <td>
                                        <span id="Main__lblGender"><?php echo $login_session['Gender']; ?></span></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #000000;">Date of Birth</td>
                                    <td>
                                        <span id="Main__lblDOB"><?php echo $login_session['Dob']; ?></span></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #000000;">County</td>
                                    <td>
                                        <span id="Main__lblCounty"><?php echo $login_session['County']; ?></span></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #000000;">Country</td>
                                    <td>
                                        <span id="Main__lblNationality"><?php echo $login_session['Country']; ?></span></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #000000;">Phone number</td>
                                    <td>
                                        <span id="Main__lblPhoneNo1"><?php echo $login_session['phoneNo']; ?></span></td>
                                </tr>
                                <tr style="display: none">
                                    <td style="font-weight: bold; color: #000000;">Postal code</td>
                                    <td>
                                        <span id="Main__lblPostCode"></span></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #000000;">Email</td>
                                    <td>
                                        <span id="Main__lblEmail"><?php echo $login_session['email']; ?></span></td>
                                </tr>
                                <tr style="display: none">
                                    <td style="font-weight: bold; color: #000000;">City</td>
                                    <td>
                                        <span id="Main__lblCity"></span></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #000000;">Postal Address</td>
                                    <td>
                                        <span id="Main__lblPostalAddress"><?php echo $login_session['address']; ?></span></td>
                                </tr>
                                <tr style="display: none">
                                    <td style="font-weight: bold; color: #000000;">Fax Number</td>
                                    <td>
                                        <span id="Main__lblFaxNo"></span></td>
                                </tr>
                                <tr style="display: none">
                                    <td style="font-weight: bold; color: #000000;">Home Address</td>
                                    <td>
                                        <span id="Main__lblHomeAddress1"></span></td>
                                </tr>
                                <tr style="display: none">
                                    <td style="font-weight: bold; color: #000000;">Home page</td>
                                    <td>
                                        <span id="Main__lblHomePage"></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <input type="submit" name="ctl00$Main_$Button1" value="Update information" id="Main__Button1" class="btn btn-warning" />
            </div>
            <div class="col-sm-6">
                <div class="panel panel-success">
                    <div class="panel-heading"><i class="fa fa-envelope"></i>Notifications</div>
                    <div class="panel-body">
                        <marquee onmouseover="this.stop()" height="300px" onmouseout="this.start()" scrollamount="5" direction="up" scrolldelay="100">
                                                           
                        <div class="notify-w3ls">
                            <div class="alert alert-info clearfix" >
                                <span class="alert-icon"><i class="fa fa-bell-o"></i></span>
                                <div class="notification-info">
                                    <ul class="clearfix notification-meta">
                                        <li class="pull-left notification-sender">
                                            
                                            <span><a href="#"><img src="Images/NEW2.gif" />
                                                
                                                <br /></a></span>  </li>
                                        <li class="pull-right notification-time"></li>
                                    </ul>
                                    <p>
                                      
                                    </p>
                                </div>
                            </div>
                        </div>
                                </marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    </div>
                    
                     
    
            <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
               <?php include('footer.php');?>
     
