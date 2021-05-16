<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['uid']==0)) {
  header('location:logout.php');
  } else{

  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Online Toll Plaza System || Manage Pass</title>
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
     <?php include_once('includes/sidebar.php');?>
        <?php include_once('includes/header.php');?>
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	<h3>View Receipt</h3>
 
	<div class="bs-example4" data-example-id="simple-responsive-table">
  
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>S.NO</th>
            <th>Pass ID</th>
            <th>Name of Applicant</th>
            <th>Vehicle No.</th>
            <th>Validity From</th>
            <th>Validity To</th>
            <th>Reason</th>
            <th>Cost</th>
            <th>Status</th>
            </tr>
        </thead>
        <tbody>
           <?php

          //$a=mysql_real_escape_string($_SESSION['name']);
//         $query="select * from pass where name= '$a'";
$x=$_SESSION['name'];
$ret=mysqli_query($con,"select * from receipt where name = '$x'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
          <tr>
            <th scope="row"><?php echo $cnt;?></th>
                <td><?php  echo $row['id'];?></td>
                <td><?php  echo $row['name'];?></td>
                <td><?php  echo $row['vehno'];?></td>
                <td><?php echo $row['valfrom'];?></td>
                <td><?php echo $row['valto'];?></td>
                <td><?php echo $row['reason'];?></td>
                <td><?php echo $row['cost'];?></td>
                <td><?php echo $row['status'];?></td>
                </tr>
                <?php 
                $cnt=$cnt+1;
                }
                ?>
          </tr>
  
        </tbody>
      </table>
    </div><!-- /.table-responsive -->
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
<?php }  ?>