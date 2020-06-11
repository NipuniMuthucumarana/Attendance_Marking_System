<!DOCTYPE html>
<html>
<head>
  <title>Users</title>
<link rel="stylesheet" type="text/css" href="css/Users.css">
<script>
  $(window).on("load resize ", function() {
    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
    $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>
</head>
<body>
<?php include'headerStu.php'; ?> 
<main>
  <section>
  <!--User table-->
  <h1 class="slideInDown animated">Here is your Attendance Report </h1>
  <div class="tbl-header slideInRight animated">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>ID | Name</th>
          <th>Finger ID</th>
          <th>Subject Id</th>
          <th>Attendance</th>
          <th>Percentage</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content slideInRight animated">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php
          //Connect to database
          //require'connectDB.php';
            
          $db=mysqli_connect('localhost','root','','attendance2');
          $sql=mysqli_query($db,"SELECT STUDENT_ID, FINGERPRINT_ID, SUBJECT_ID, FORMAT (COUNT(FINGERPRINT_ID),0) FINGERPRINT_ID,CONCAT( ROUND(COUNT(DISTINCT DAY)/(SELECT COUNT(DISTINCT DAY) FROM mark_attendance)*100,0),'%') FROM mark_attendance GROUP BY STUDENT_ID,SUBJECT_ID");
            //$sql = "SELECT * FROM teacher WHERE NOT username='' ORDER BY id DESC";
            //$result = mysqli_stmt_init($conn);
            /*if (!mysqli_stmt_prepare($result, $sql)) {
                echo '<p class="error">SQL Error</p>';
            }
            else{
              mysqli_stmt_execute($result);*/
              //$resultl   = mysqli_fetch_array($sql,MYSQLI_NUM);

               while ($row = mysqli_fetch_array($sql,MYSQLI_NUM)){
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
        echo "</td></tr>";
      }
        ?>
      </tbody>
    </table>
  </div>
</section>
</main>
</body>
</html>