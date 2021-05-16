<?php
session_start();
error_reporting(0);
?>

<!DOCTYPE HTML>
<html>
<html lang="en">
<head>
<title>Online Toll Plaza System || Login Page</title>

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
								<b style="color:white; font-family:oswald;">ONLINE TOLL PLAZA SYSTEM</b>
							</div>
                            <form class="login-form" method="post" action="l1.php">
                           
								<label >Username
								</label>
								<input type="text" id="login-email" name="username" class="textbox" required />
								<label
									>Password
								</label>
								<input type="password" name="password" id="login-password" class="textbox" required/><br><br>
							
							<button type="submit" value="Login" name="login" style="display: block;
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
								Log-in to your account <i style="font-size: 0.8em;" class="ion-ios-arrow-thin-right"></i>
                            </button>
                            
                        </div>
                        </form>
						<div class="card" id="register">
							<div class="box">
								<div id="branding-small">
								</div>
								<div class="box-header"><b style="color:white; font-family:oswald;">REGISTER</b></div>
								<form name="register-form" id="register-form" onsubmit="return validate1()" action="r1.php" method="post">
                                    <label>Name</label>
                                    <input type="text" name="name" class="textbox">
                                    <label>Email</label>
                                    <input type="text" name="email" id="register-email" class="textbox" />
                                    <label>Phone number</label>
                                    <input type="tel" name="number" class="textbox" maxlength= '10'>                 
                                    <label>Password</label>
                                    <input type="password" class="textbox" name="password1"required
                                    />
                                    <label>Confirm Password</label>
                                    <input
                                      type="password" class="textbox" name="password2" required/>
                                  
                </div>
							<button type="submit" value="Register" name="login" style="display: block;
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
								Create an account <i style="font-size: 0.8em;" class="ion-ios-arrow-thin-right"></i>
							</button>
                        </div>
                        </form>
					</div>
					<div id="toggle-tabs">
						<div class="tab" id="toggle-login">Sign In</div>
						<div class="tab" id="toggle-register">Register</div>
					</div>
				</div><br><br>
                <span><a style="text-decoration:none; text-align:center; margin-left:35%;" href="forgotpassword.php"><strong style = "color: white; text-align:center;"> Forgot Password ? </strong></a></span>
                <span><a style="text-decoration:none; margin-left:8.5%;" href="../admin/register.php"><strong style = "color: white;">Admin Login</strong></a>	</span><br> <br>
			</div>
		</div>
    
		    <script
			src="https://code.jquery.com/jquery-2.2.4.min.js"
			integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
			crossorigin="anonymous"> </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="reg.js"></script>
	</form>
  </div>
  <div class="copy_layout login">
      <p style="color: white;font-size: 15px; text-align:center;"><b>Online Toll Plaza System @ 2020</b> </p>
   </div>
</body>
</html>
