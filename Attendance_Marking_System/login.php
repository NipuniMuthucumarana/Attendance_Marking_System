<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   <title>Login</title>
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

<?php include'header/header1.php';?>
<main>
	<h1 class="slideInDown animated">Log in to the Smart Attendance Marking System<br>(SAMS)</h1>
	<div class="form-style-5 slideInDown animated">
		<div class="alert">
		<label id="alert"></label>
		</div>
	
		
	
        <form method="post" action="login.php">
    	<!--display validation errors here-->
       	
			<fieldset>
			<legend><span class="number"></span> Login:</legend>
				<label>User Name:</label>
				<input type="text" name="username" id="username" placeholder="User Name..." value="<?php echo $username; ?>">
				<label>Password:</label>
				<input type="password" name="password" id="password" placeholder="Password..." value="<?php echo $password; ?>">
				<button type="submit" name="login" class="btn">Login</button>
				<button <a href="#"></a> Sing in</button>
				<!-- <button type="submit" name="login" class="btn"></button> -->
				<a href="">Forget Password</a></fieldset>

			</fieldset>
		</form>
	</div>
</main>

</body>
</html>
