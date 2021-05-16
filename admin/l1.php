<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $name=$_POST['name'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select id from admin where name='$name' && password='$password'");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['aid']=$ret['id'];
      $_SESSION['name']=$ret['name'];
     header('location:dashboard.php');
    }
    else{
      echo("<script>alert('Invalid Details!')</script>");
      echo("<script>window.location = 'register.php';</script>");
    }
  }
  ?>