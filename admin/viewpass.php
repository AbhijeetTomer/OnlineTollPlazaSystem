<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  }
  else{

    
            if(isset($_POST['submit1']))
            {
              $vid=$_GET['viewid'];
              $query=mysqli_query($con,"update pass set status ='Approved' where id='$vid' ");
              echo '<script>alert("Pass Approved")</script>';
              echo "<script>window.location.href ='dashboard.php'</script>";
            }
            elseif((isset($_POST['submit2'])))
            {
              $vid=$_GET['viewid'];
              $query=mysqli_query($con,"update pass set status ='Declined' where id='$vid' ");
              echo '<script>alert("Pass Declined")</script>';
              echo "<script>window.location.href ='dashboard.php'</script>";
            }
  
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Online Toll Plaza System || View Pass</title>

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
  	    <h3>View Pass</h3>
  	    <div class="well1 white" id="exampl">
          
  <?php
$vid=$_GET['viewid'];
$ret=mysqli_query($con,"select * from pass where id='$vid' and status = 'Not Approved'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
          <fieldset>
            
             <table border="1" class="table table-bordered mg-b-0" width="100%">
              <tr>
    <th>Vehicle Category</th>
    <td><?php echo $row['vehcat'];?></td>
  </tr>
        <tr>
    <th>Pass ID</th>
    <td><?php echo $row['id'];?></td>
  </tr> 
  <tr>
    <th>Vehicle Name</th>
    <td><?php echo $row['name'];?></td>
  </tr> 
    <tr>
    <th>Vehicle Reg Number</th>
    <td><?php echo $row['vehno'];?></td>
  </tr> 
  <tr>
    <th>Validity From</th>
    <td><?php echo $row['valfrom'];?></td>
  </tr>   
  <tr>
    <th>Validity To</th>
    <td><?php echo $row['valto'];?></td>
  </tr> 
  <tr>
    <th>Name of Applicant</th>
    <td><?php echo $row['name'];?></td>
  </tr> 
  <tr>
    <th>Age of Applicant</th>
    <td><?php echo $row['age'];?></td>
  </tr>
  <tr>
    <th>Gender of Applicant</th>
    <td><?php echo $row['gender'];?></td>
  </tr>
  <tr>
    <th>Address of Applicant</th>
    <td><?php echo $row['address'];?></td>
  </tr>
  <tr>
    <th>Reason</th>
    <td><?php echo $row['reason'];?></td>
  </tr>
        
         <?php } ?>
       </table>
       <form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" method="post">
       <div class="form-group">
             <p style="text-align: center;"> <button type="submit" name="submit1" class="btn btn-primary">Approve</button></p>
            </div>
            <div class="form-group">
             <p style="text-align: center;"> <button type="submit" name="submit2" class="btn btn-primary">Decline</button></p>
            </div>
        
            </form>
            
            <div class="form-group">
           <p style="margin-top:1%"  align="center">
  <i class="fa fa-print fa-2x" style="cursor: pointer;"  OnClick="CallPrint(this.value)" ></i>
</p>
     </div>        
            
          </fieldset>
    
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

<script>
function CallPrint(strid) {
var prtContent = document.getElementById("exampl");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
WinPrint.close();
}
</script>
</body>
</html>
<?php
}
?>