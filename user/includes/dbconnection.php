<?php
ob_start();
session_start();

$con=mysqli_connect("localhost", "root", "", "swsql");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

  ?>
