<?php  session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V5</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" href="model/style/icon-font.min.css">
	<link rel="stylesheet" href="model/style/animate.css">
	<link rel="stylesheet" href="model/style/hamburgers.min.css">
	<link rel="stylesheet" href="model/style/animsition.min.css">
	<link rel="stylesheet" href="model/style/select2.min.css">
	<link rel="stylesheet" href="model/style/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="model/style/util.css">
	<link rel="stylesheet" type="text/css" href="model/style/main.css">
</head>
<body style="background-color: red">
	<div class="limiter">
		<div class="container-login100" style="background-image: url('model/image/background/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form action="handling/login.php" method="post" class="login100-form validate-form flex-sb flex-w" >
					<span class="login100-form-title p-b-53">
						Sign In With
					</span>
					<a href="#" class="btn-face m-b-20">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a>
					<a href="#" class="btn-google m-b-20">
						<img src="model/image/icon/icon-google.png" alt="GOOGLE">
						Google
					</a>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Username
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>
						<a href="#" class="txt2 bo1 m-l-5">
							Forgot?
						</a>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type="submit" name="login" value="true">
							LOG IN 
						</button>
					</div>
					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Not a member?
						</span>
						<a href="#" class="txt2 bo1">
							Sign up now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>

</body>
</html>