<!--teacher-->
<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage Users</title>
<link rel="stylesheet" type="text/css" href="css/student.css">
<script>
  $(window).on("load resize ", function() {
    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
    $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>
<script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha1256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
</script>
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/manage_users.js"></script>
<script>
  $(document).ready(function(){
  	  $.ajax({
        url: "manage_users_up.php"
        }).done(function(data) {
        $('#manage_users').html(data);
      });
    setInterval(function(){
      $.ajax({
        url: "manage_users_up.php"
        }).done(function(data) {
        $('#manage_users').html(data);
      });
    },5000);
adm
</script>
</head>
<body>
	<?php include'header/headeradm.php';?>
	<form method="post" action="products.php">
	<main>
	<h1 class="slideInDown animated">Teacher Details</h1>
	<div class="form-style-5 slideInDown animated">
		<div class="alert">
		<label id="alert"></label>
		</div>
		<form>
			<fieldset>
			<legend><span class="number">1</span> User Fingerprint ID:</legend>
				<label>Enter Fingerprint ID:</label>
				<input type="text" name="finger_id" placeholder="User Fingerprint ID..." value="<?php echo $finger_id; ?>">
				<!--<button type="button" name="fingerid_add" class="fingerid_add">Add Fingerprint ID</button>-->
			</fieldset>
			<fieldset>
				<legend><span class="number">2</span> User Info</legend>
				<input type="text" name="teacher_id" placeholder="User ID..." value="<?php echo $teacher_id; ?>">
				<input type="text" name="name" placeholder="User Name..." value="<?php echo $name; ?>">
				<input type="text" name="teaaddress" placeholder="User Address..." value="<?php echo $teaaddress; ?>">
				<input type="text" name="teaemail" placeholder="User Email..." value="<?php echo $teaemail; ?>">
				<input type="text" name="teacontact" placeholder="Contact Number..." value="<?php echo $teacontact; ?>">
				<!--<input type="text" name="List" id="List" placeholder="Subject code..." value="<?php echo $List; ?>">-->
			</fieldset>
			<fieldset>
			<legend><span class="number">3</span> Additional Info</legend>
			<label>
				Time In:
				<input type="time" name="time" value="<?php echo $time; ?>">
				<input type="radio" name="gender" class="gender" value="Female">Female
	          	<input type="radio" name="gender" class="gender" value="Male" checked="checked">Male
	      	</label >
			</fieldset>
		</form>
	</div>

	
		<div class="side">
			<div class="form-style-6 slideInRight animated">
		<div class="alert">
		<label id="alert"></label>
		</div>
		
				<button type="submit" name="proinsert" class="btn">Add User</button><br/>
				<button type="submit" name="proupdate" class="btn">Update User</button><br/>
				<button type="submit" name="prodelete" class="btn">Remove User</button><br/>
				<button type="submit" name="proview"  class="btn">View User</button><br/>
				<button type="submit" name="proclear" class="btn">Clear</button><br/>
		</div>
		</div>		
		
		

	<div class="section">
	<!--User table-->
		<div class="tbl-header slideInRight animated">
		    <table cellpadding="0" cellspacing="0" border="0">
		      <thead>
		        <tr>
	        	  <th>Fingerprint ID</th>
		          <th>Teacher Id</th>
		          <th>Name</th>
		          <th>Address</th>
		          <th>Email</th>
		          <th>Contact No</th>
		        </tr>
		      </thead>
		    </table>
		</div>
		<div class="tbl-content slideInRight animated">
		    <table cellpadding="0" cellspacing="0" border="0">
		      <div id="manage_users"></div>


		      <tbody>
        <?php
          //Connect to database
          //require'connectDB.php';

            $db=mysqli_connect('localhost','root','','attendance2');
          $sql=mysqli_query($db,"SELECT FINGERPRINT_ID,TEACHER_ID,NAME, ADDRESS, EMAIL,CONTACT_NO FROM teacher2 GROUP BY TEACHER_ID, FINGERPRINT_ID");
            //$sql = "SELECT * FROM teacher WHERE NOT username='' ORDER BY id DESC";
            //$result = mysqli_stmt_init($conn);
            /*if (!mysqli_stmt_prepare($result, $sql)) {
                echo '<p class="error">SQL Error</p>';
            }
            else{
              mysqli_stmt_execute($result);*/
              //$resultl   = mysqli_fetch_array($sql,MYSQLI_NUM);

               while ($row    = mysqli_fetch_array($sql,MYSQLI_NUM)){
        echo "<tr><td>";
        echo $row[0];
        echo "</td><td>";
        echo $row[1];
        echo "</td><td>";
        echo $row[2];
        echo "</td><td>";
        echo $row[3];
        echo "</td><td>";
        echo $row[4];
        echo "</td><td>";
        echo $row[5];
        echo "</td></tr>";
      }
        ?>
      </tbody>



		 
		</div>
	</div>

</main>
</body>
</html>
	<!--<style>
    body {
        background-image: url("images (37).jpg");
        /* Full height */
		/*height: 300%;*/

		height: 100%; 

		  /* Center and scale the image nicely */
			/*  background-position: center;*/
			  background-repeat: no-repeat;
        background-size: cover;
    } 
 
    </style>-->
    <!--
	<div class="header">
		<h2>TEACHER</h2>
	</div>

	<div class="content">
		<?php //if (isset($_SESSION['SUCCESS'])): ?>
			<div class="error sucess">
				<h3>
					<?php 
                       //echo $_SESSION['SUCCESS'];
                       //unset($_SESSION['SUCCESS']);
					?>
				</h3>
			</div>
		<?php //endif ?>
	</div>
    <form method="post" action="products.php">
    
    
	<div class="input-group">
	
  		<div class="column left">
	  		<div class="input-group">
				<button type="submit" name="product" formaction="products.php" class="btn">TEACHER</button><br/>
	            <button type="submit" name="supplier" formaction="supplier.php" class="btn">STUDENT</button><br/>
                <button type="submit" name="customer" formaction="login.php" class="btn">ADMIN</button><br/>
		        <button type="submit" name="employee" formaction="employee.php" class="btn">EMPLOYEE</button><br/>
		        <button type="submit" name="sales" formaction="sales.php" class="btn">SALES</button><br/>
		        <button type="submit" name="purchase" formaction="purchase.php" class="btn">PURCHASE</button><br/>
		        <button type="submit" name="user" formaction="login2.php" class="btn">USER</button><br/>
				<button type="submit" name="logout" formaction="login.php" class="btn">LOG OUT</button><br/>
			</div>
		</div>
		<div class="column middle">
			<div class="input-groupNew">

			<div class="head"><header><u>TEACHER'S DETAILS</u></header></div>

			<span style="padding-left:45px"><b>Teacher's ID :</b> <span style="padding-left:25px"><input type="text" name="teacher_id" value="<?php //echo $teacher_id; ?>"><br><br/></span>
			</span>
			<span style="padding-left:45px"><b>Teacher's Name :</b> <span style="padding-left:20px"><input type="text" name="name" value="<?php //echo $name; ?>"><br><br/></span>
			</span>
			<span style="padding-left:45px"><b>Subject Code :</b><span style="padding-left:60px"> 
			
				<select name="List">
		  			<option value="CO321">CO321</option>
		  			<option value="CO322">CO322</option>
		  			<option value="CO323">CO323</option>
		  			<option value="CO324">CO324</option>
		  			<option value="CO325">CO325</option>
				</select><br><br/></span>
			</span>
			<span style="padding-left:45px"><b>Time :</b> <span style="padding-left:25px"><input type="time" name="time" value="<?php //echo $time; ?>"><br><br/></span>
			</span>

			
			
			</div>
		</div>
		<div class="column right">
	  		
				<button type="submit" name="proinsert" class="btn">INSERT</button><br/>
				<button type="submit" name="prodelete" class="btn">DELETE</button><br/>
				<button type="submit" name="proview"  class="btn">VIEW</button><br/>
				<button type="submit" name="proclear" class="btn">CLEAR</button><br/>
				<button type="submit" name="proupdate" class="btn">UPDATE</button><br/>
			
		</div>

		</div>
	</div>
    
</form>
</body>
</html>
