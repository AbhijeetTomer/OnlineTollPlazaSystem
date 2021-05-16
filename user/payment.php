<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if (strlen($_SESSION['uid']==0)) {
    header('location:logout.php');
    }
    else
    {  
    if(isset($_POST['submit']))
    {
    $vid=$_GET['passid'];
    $pay=$_POST['appname'];
    $x=$_SESSION['name'];
    $q1=mysqli_query($con,"select * from pass where id = '$vid'");
    $q2=mysqli_query($con,"select * from user where username = '$x' ");  
    $r1=mysqli_fetch_array($q1);
    $r2=mysqli_fetch_array($q2);
   // $x=$_SESSION['name'];
    if($r1['vehcat']=="Two Wheeler")  
      {
        $r2['wallet']= $r2['wallet']-$pay;
        $p=$r2['wallet'];
        $no=$r1['vehno'];
        $vaf=$r1['valfrom'];
        $vat=$r1['valto'];
        $rsn=$r1['reason'];
        $cst=$pay;
        $query=mysqli_query($con,"update user set wallet = '$p' where username = '$x' ");
        $q3=mysqli_query($con,"insert into receipt (name,vehno,valfrom,valto,reason,cost,status) values('$x','$no','$vaf','$vat','$rsn','$cst','Paid')");
        $q4=mysqli_query($con,"delete from pass where id= '$vid' ");
        echo '<script>alert("Payment Successful.")</script>';
        echo "<script>window.location.href ='viewpass.php'</script>";
      }
    elseif($r1['vehcat']=="Three Wheeler")
      {
        $r2['wallet']= $r2['wallet']-$pay;
        $p=$r2['wallet'];
        $no=$r1['vehno'];
        $vaf=$r1['valfrom'];
        $vat=$r1['valto'];
        $rsn=$r1['reason'];
        $cst=$pay;
        $query=mysqli_query($con,"update user set wallet = '$p' where username = 'avi' ");
        $q3=mysqli_query($con,"insert into receipt (name,vehno,valfrom,valto,reason,cost,status) values('$x','$no','$vaf','$vat','$rsn','$cst','Paid')");
        $q4=mysqli_query($con,"delete from pass where id= '$vid' ");
        echo '<script>alert("Payment Successful.")</script>';
        echo "<script>window.location.href ='viewpass.php'</script>";
      }
      elseif($r1['vehcat']=="Four Wheeler")
      {
        $r2['wallet']= $r2['wallet']-$pay;
        $p=$r2['wallet'];
        $no=$r1['vehno'];
        $vaf=$r1['valfrom'];
        $vat=$r1['valto'];
        $rsn=$r1['reason'];
        $cst=$pay;
        $query=mysqli_query($con,"update user set wallet = '$p' where username = '$x' ");
        $q3=mysqli_query($con,"insert into receipt (name,vehno,valfrom,valto,reason,cost,status) values('$x','$no','$vaf','$vat','$rsn','$cst','Paid')");
        $q4=mysqli_query($con,"delete from pass where id= '$vid' ");
        echo '<script>alert("Payment Successful.")</script>';
        echo "<script>window.location.href ='viewpass.php'</script>";
      }
      elseif($r1['vehcat']=="Six Wheeler")
      {
        $r2['wallet']= $r2['wallet']-$pay;
        $p=$r2['wallet'];
        $no=$r1['vehno'];
        $vaf=$r1['valfrom'];
        $vat=$r1['valto'];
        $rsn=$r1['reason'];
        $cst=$pay;
        $query=mysqli_query($con,"update user set wallet = '$p' where username = '$x' ");
        $q3=mysqli_query($con,"insert into receipt (name,vehno,valfrom,valto,reason,cost,status) values('$x','$no','$vaf','$vat','$rsn','$cst','Paid')");
        $q4=mysqli_query($con,"delete from pass where id= '$vid' ");
        echo '<script>alert("Payment Successful.")</script>';
        echo "<script>window.location.href ='viewpass.php'</script>";
      }
      else
      {
        echo '<script>alert("Insufficient Balance.")</script>';
        echo "<script>window.location.href ='addmoney.php'</script>";
      }
    // $nm=$row['usename'];
    //     if($row>0)
    //         header('location:viewpass.php');
    //     else
    //     {
    //         //echo '<script>alert(" '.$pay.' ")</script>';
    //         header('location:addpass.php');
    //     }
    
}
 
?>
  <!DOCTYPE HTML>
<html>
<head>
<title>Online Toll Plaza System || Payment</title>

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
  	    <h3>Payment</h3>
  	    <div class="well1 white">

          <?php
$vid=$_GET['passid'];
$ret=mysqli_query($con," select * from category where vehcat in (select vehcat from pass where id='$vid')");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

          <form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" method="post">
          <p style="font-size:16px; color:red" align ="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

            <div class="form-group">
              <label class="control-label">Cost</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched"  readonly="readonly" id="appname" name="appname" value="<?php echo $row['cost'];?>">
            </div>
            <div class="form-group">
             <p style="text-align: center;"> <button type="submit" name="submit" class="btn btn-primary">Pay Now</button></p>
            </div>        
        </form>
<?php }?>

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
<?php 
}
?>
