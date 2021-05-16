<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['uid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
    $name=$_POST['appname'];
    $age=$_POST['appage'];
    $gender=$_POST['appgender'];
    $add=$_POST['appadd'];
    $vehname=$_POST['vehname'];
    $catname=$_POST['catname'];
    $regname=$_POST['regname'];
    $vfrom=$_POST['vfrom'];
    $vto=$_POST['vto'];
    $costpass=$_POST['costpass'];
    //$passid = mt_rand(100000000, 999999999);
 
   
       $query=mysqli_query($con,  "insert into  pass(name,age,gender,address,vehcat,vehno,valfrom,valto,reason) values('$name','$age','$gender','$add','$catname','$regname','$vfrom','$vto','$costpass')");
    if ($query) {
     echo '<script>alert("New Pass has been added.")</script>';
echo "<script>window.location.href ='addpass.php'</script>";
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

}
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Online Toll Plaza System || Add New Pass</title>

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
  	    <h3>Apply Pass</h3>
  	    <div class="well1 white">
        <form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" method="post">
          <p style="font-size:16px; color:red" align ="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
          <fieldset>

          <div class="form-group">
              <label class="control-label">Name of Applicant</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched"  required="true" id="appname" name="appname" value="">
            </div>

            <div class="form-group">
              <label class="control-label">Age of Applicant</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched"  required="true" id="appage" name="appage" value="">
            </div>

            <div class="form-group">
              <label class="control-label">Applicant Gender: </label>
              <input type="radio" name="appgender" id="appgender" value="Female">Female
              <input type="radio" name="appgender" id="appgender" value="Male">Male
            </div>  
             
            <div class="form-group">
              <label class="control-label">Address of Applicant</label>
              <textarea type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched"  required="true" id="appadd" name="appadd" value=""></textarea>
            </div>

            <div class="form-group">
              <label class="control-label">Vehicle Name</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched"  required="true" id="vehname" name="vehname" value="">
            </div>

            <div class="form-group">
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
              <label class="control-label">Vehicle Reg Number</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched"  required="true" id="regname" name="regname" value="">
            </div>
            <div class="form-group">
              <label class="control-label">Validity From</label>
              <input type="date" class="form-control1 ng-invalid ng-invalid-required ng-touched"  required="true" id="vfrom" name="vfrom" value="">
            </div>
            <div class="form-group">
              <label class="control-label">Validity To</label>
              <input type="date" class="form-control1 ng-invalid ng-invalid-required ng-touched"  required="true" id="vto" name="vto" value="">
            </div>
            
            
            <div class="form-group">
              <label class="control-label">Reason</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched"  required="true" id="costpass" name="costpass" value="">
            </div>
         
            <div class="form-group">
             <p style="text-align: center;"> <button type="submit" name="submit" class="btn btn-primary">Apply Pass</button></p>
             
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
<?php 
}
 ?>