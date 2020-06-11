
<!DOCTYPE html>
<html>
	<head>
   		<title>Manage Users</title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
	</head>
<body>
<?php include'header/noheader.php'; ?> 

<main>
	<!--<h1 class="slideInDown animated">Choose your login</h1>-->
	<div class="form-style-5 slideInDown animated">
		<div class="alert">
		<label id="alert"></label>
		</div>
 

    <form method="post" action="index.php">
		<fieldset>
			<legend><span class="number"></span> Choose your login</legend>
    
			<div class="content">
				<?php if (isset($_SESSION['SUCCESS'])): ?>
					<div class="error sucess">
						<h3>
							<?php 
		                       echo $_SESSION['SUCCESS'];
		                       unset($_SESSION['SUCCESS']);
							?>
						</h3>
					</div>
				<?php endif ?>
			</div>
    
			<div class="input-group">
				
				<button type="submit" name="product" formaction="login.php" class="btn"><b>TEACHER</b></button><br/>
			    <button type="submit" name="supplier" formaction="loginStu.php" class="btn"><b>STUDENTS</b></button><br/>
		        <button type="submit" name="product" formaction="loginAdmin.php" class="btn"><b>ADMIN</b></button><br/>
				

			</div>
		</fieldset>
    </form>
</body>
</html>
