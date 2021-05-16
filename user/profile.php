<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['uid']==0)) {
  header('location:logout.php');
  } else
  {
    if(isset($_POST['submit']))
  {
    $sid=$_SESSION['uid'];
    $sname=$_POST['sname'];
    $mobno=$_POST['smobno'];
    $sgender=$_POST['sgender'];
    $wallet=$_POST['wallet'];
  
     $query=mysqli_query($con, "update user set username ='$sname', mobno='$mobno',wallet= '$wallet' where id='$sid'");
    if ($query) {
    $msg="Your profile has been updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again.";
    }
  }
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Online Toll Plaza System || Staff Profile</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <?php include_once('includes/sidebar.php');?>
        <?php include_once('includes/header.php');?>
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	    <h3>My Profile</h3>
  	    <div class="well1 white">
        <form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" method="post">
          <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
          <fieldset>
            <?php
$uid=$_SESSION['uid'];
$x= $_SESSION['name'];
$ret=mysqli_query($con,"select * from user where id='$uid'");
$g=mysqli_query($con,"select * from pass where name='$x'");
$r=mysqli_fetch_array($g);
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
            
            <div class="form-group">
              <label class="control-label">Name</label>
              <input type="text" class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" id="sname" name="sname" value="<?php  echo $row['username'];?>" required='true'>
            </div>
            <div class="form-group">
              <label class="control-label">Contact Number</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" id="smobno" name="smobno"value="<?php  echo $row['mobno'];?>" required='true' maxlength='10' pattern='[0-9]+'>
            </div>
            <div class="form-group">
              <label class="control-label">Email address</label>
              <input type="email" id="email" name="email" class="form-control1 ng-invalid ng-valid-url ng-invalid-required ng-touched" value="<?php  echo $row['email'];?>" >
            </div>
            <div class="form-group">
              <label class="control-label">Gender: </label>
              <?php  if($r['gender']=="Female"){ ?>
              <input type="radio" name="sgender" id="sgender" value="Female" checked="true">Female
              <input type="radio" name="sgender" id="sgender" value="male">Male
              <?php } else { ?>
              
              <input type="radio" name="gender" id="gender" value="Male" checked="true">Male
              <input type="radio" name="gender" id="gender" value="Female">Female
              
             <?php } ?>
            </div>
            <div class="form-group">
              <label class="control-label">Wallet Balance</label>
              <input type="text" id="email" name="wallet" class="form-control1 ng-invalid ng-valid-url ng-invalid-required ng-touched" value="<?php  echo $row['wallet'];?>" readonly='true'>
            </div>
           
           
            <?php } ?>
            <div class="form-group">
             <p style="text-align: center;"> <button type="submit" name="submit" class="btn btn-primary">Update</button></p>
             
            </div>
          </fieldset>
        </form>
      </div>
    </div>
    <?php include_once('includes/footer.php');?>
   </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
<?php } ?>