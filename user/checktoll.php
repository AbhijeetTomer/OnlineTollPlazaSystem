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
<title>Online Toll Plaza System || Check</title>

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
  	    <h3>Check Toll</h3>
  	    <div class="well1 white">
        <form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" method="post">
          <p style="font-size:16px; color:red" align ="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
          <fieldset>

          <div class="form-group">
              <label class="control-label">Source</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched"  required="true" id="source" name="source" value="">
                <br><br>
              <label class="control-label">Destination</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched"  required="true" id="destn" name="destn" value="">

              <br><br>
              <label class="control-label">Vehicle Category</label>
              <select type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched"  required="true" id="catname" name="catname" value="">
                <option value="">Choose Category</option>
                                <?php $query=mysqli_query($con,"select * from category");
              while($row=mysqli_fetch_array($query))
              {
              ?>    
              <option value="<?php echo $row['vehcat'];?>"><?php echo $row['vehcat'];?></option>
                  <?php } ?> 
                </select>
            </div>

            <div class="form-group">
             <p style="text-align: center;"> <button type="submit" name="submit" class="btn btn-primary">Check</button></p>
             
            </div>
          </fieldset>
        </form>
        <?php
        if(isset($_POST['submit']))
        {
            $src=$_POST['source'];
            $destn=$_POST['destn'];
            $type=$_POST['catname'];
            $ret=mysqli_query($con,"select * from toll where source  ='$src'  and destn = '$destn' ");
            $row=mysqli_fetch_array($ret);

            $x=  $_SESSION['name'];
            $ret1=mysqli_query($con,"select * from category where vehcat ='$type'");
            $row1=mysqli_fetch_array($ret1);


            ?>
            <label class="control-label">Toll</label>
              <input type="number" class="form-control1 ng-invalid ng-invalid-required ng-touched"   value="<?php echo $row['number'];?>">
              <br><br>

              <label class="control-label">Estimated Cost</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched"   value="<?php echo $row['number']*$row1['cost'];?>">
        <?php } ?>
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