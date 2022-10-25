
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Password</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
       
</head>
<body>
<body>
	<div class="container">
    <form action="update_password_submit.php" method="post" class="login-email">
		
			<p class="login-text" style="font-size: 2rem; font-weight: 300;">Reset Password</p>
			<div class="input-group">
				<input type="password" name="pass" placeholder="Enter your new password here" required>
			</div>
			<div class="input-group">
            <input type="password" name="cpass" placeholder="Enter your password again here" required>
			</div>
			<div class="input-group">
                     
				<button class="btn" name="submit_reset" >Reset</button>
		</form>
	</div>
</body>
    
</html>