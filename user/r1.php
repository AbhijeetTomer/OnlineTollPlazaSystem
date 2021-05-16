<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $name=$_POST['name'];
    $password1=$_POST['password1'];
    $password2=$_POST['password2'];
    $email=$_POST['email'];
    $mob=$_POST['number'];
    if($password1==$password2)
    {
        $password1=md5($password1);
        $query=mysqli_query($con,"insert into user (username,password,email,mobno) values ('$name','$password1','$email','$mob')");
        if ($query) {
       echo '<script>alert("You have been Registered")</script>';
       echo "<script>window.location.href ='register.php'</script>";  
    }
  }
    
    else{
      echo("<script>alert('Invalid Details!')</script>");
      echo("<script>window.location = 'register.php';</script>");
     }
  }

  ?>