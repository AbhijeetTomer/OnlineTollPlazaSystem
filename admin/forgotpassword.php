<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['submit']))
  {
    $contactno=$_POST['contactno'];
    $email=$_POST['email'];

        $query=mysqli_query($con,"select id from admin where email='$email' and mobno='$contactno' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['contactno']=$contactno;
      $_SESSION['email']=$email;
     header('location:resetpassword.php');
    }
    else{
      $msg="Invalid Details. Please try again.";
    }
  }
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Online Toll Plaza System || Forgot Page</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link
	rel="stylesheet"
	href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
/>
<link rel="stylesheet" href="regstyle.css" />
</head><br>
<body>
<div id="page-wrapper">
			<div id="modal-wrapper">
				<div id="modal">
					<div id="cards">
						<div class="card" id="login">
							<div class="box">
								<b style="color:white; font-family:oswald;">FORGOT PASSWORD</b>
							</div>
							<form role="form" class="login-form" method="post" action="" >
								<label >Email
								</label>
								<input type="text" name="email" class="textbox" required />
								<label
									>Mobile Number
								</label>
								<input type="text" name="contactno" class="textbox" maxlength="10" pattern="[0-9]+" required/><br><br>
							
							<button type="submit" value="Reset" name="submit" style="display: block;
                                width: 100%;
                                padding: 20px 0;
                                color: white;
                                background:rgb(0, 138, 230);
                                background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMTAwJSI+CiAgICA8c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjM2I4Njg2IiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzBiNDg2YiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgPC9saW5lYXJHcmFkaWVudD4KICA8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2dyYWQtdWNnZy1nZW5lcmF0ZWQpIiAvPgo8L3N2Zz4=);
                                background: linear-gradient(135deg, rgb(0, 138, 230) 0%,rgb(0, 122, 204) 100%);
                                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#FF3B8686', endColorstr='#FF0B486B',GradientType=1 );
                                border: 0;
                                font-size: 1em;
                                font-weight: bold;
                                font-family:oswald;
                                cursor: pointer;">
								Reset our password <i style="font-size: 0.8em;" class="ion-ios-arrow-thin-right"></i>
                            </button><br>
                            <a style=" text-align:center; margin-left:23%; color:rgb(0, 138, 230);" href="register.php"><strong> Already have an account??</strong></a>
                        </div>
                        </form>	
          </div>
        </div>
      </div>
      </div>
  <div class="copy_layout login">
      <p style="color: white;font-size: 15px; text-align:center;"><b>Online Toll Plaza System @ 2020</b> </p>
   </div>
</body>
</html>
