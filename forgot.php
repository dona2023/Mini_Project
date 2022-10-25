<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style3.css">

	<title>Reset Password</title>
</head>
<body>
	<div class="container">
		<form action="forgotpswd.php" method="post" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight:50;">Enter your Registered Mail</p>
			<div class="input-group">
				<input type="text" name="email" placeholder="Your Email Address"> 
			</div>
			
			<div class="input-group">
				<button name="send_otp" class="btn">submit</button>
			</div>
			
		</form>
	</div>
</body>
</html>
