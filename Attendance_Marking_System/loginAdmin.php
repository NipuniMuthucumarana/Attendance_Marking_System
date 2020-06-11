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
	
		
	
        <form method="post" action="loginStu.php">
    	<!--display validation errors here-->
       	
			<fieldset>
			<legend><span class="number"></span> Login:</legend>
				<label>User Name:</label>
				<input type="text" name="usernameA" id="usernameA" placeholder="User Name..." value="<?php echo $usernameA; ?>">
				<label>Password:</label>
				<input type="password" name="passwordA" id="passwordA" placeholder="Password..." value="<?php echo $passwordA; ?>">
				<button type="submit" name="loginAdmin" class="btn">Login</button>
			</fieldset>
		</form>
	</div>
</main>

</body>
</html>
