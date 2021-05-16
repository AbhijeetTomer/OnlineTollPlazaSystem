<html>
    <head>
        <style>
  body {
  background: url("https://img.freepik.com/free-photo/highway-bridges_53876-32441.jpg?size=626&ext=jpg");
  background-size: cover;
  font-family: "Proxima Nova", Arial, Helvetica, sans-serif;
  background-attachment: fixed ;
  background-repeat: no-repeat;
  background-position: center;
  background-blend-mode: soft-light;
}
        </style>

    </head>

</html>
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');


//qwe123-adminpassword
if(isset($_POST['login']))
  {
    $adminuser=$_POST['username'];
    $_SESSION['name']=$_POST['username'];
   
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select id from user where username='$adminuser' && password='$password'");


    $ret=mysqli_fetch_array($query);
    $_SESSION['uid']=$ret['id'];
    if($ret>0){
     // $_SESSION['uid']=$ret['id'];
     // $_SESSION['name']=$ret['username'];
      
     header('location:dashboard.php');
    }
    else{
     
      echo("<script>alert('Invalid Details!')</script>");
      echo("<script>window.location = 'register.php';</script>");
    
    
    }
  }
  ?>
  