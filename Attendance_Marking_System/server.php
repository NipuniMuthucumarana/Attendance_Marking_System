<?php

   session_start();
   $username="";
   $password="";
   $usernameS="";
   $passwordS="";
   $usernameA="";
   $passwordA="";
   $finger_id="";
   $teacher_id="";
   $name="";
   $teaaddress="";
   $teaemail="";
   $teacontact="";
   $subject_id="";
   $time="";
   /*$cost="";
   $unitprice="";*/
   $fingerprint_id = "";
   $student_id="";
   $student_name="";
   $stuaddress="";
   $stuemail="";
   $stucontact="";
   $customerid="";
   $customername="";
   $cusaddress="";
   //$email="";
   $cuscontactno="";
   $employeeid="";
   $employeename="";
   $empgender="";
   $empaddress="";
   $empdob="";
   $empconno="";
   $empsalary="";
   $jobtype="";
   $List="";
   $List1="";
   $List2="";
   $value="";
   $purchaseid="";
   $psupplierid="";
   $pproductid="";
   $punitprice="";
   $pqnty="";
   $salesid="";
   $scustomerid="";
   $sproductid="";
   $sunitprice="";
   $sqnty="";
   $adpassword="";
   $userid="";
   $username="";
   $upassword="";

   $errors=array();

   //Connect to the database  
   $db=mysqli_connect('localhost','root','','attendance2');

   function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
   
   //if the login button is clicked
   if(isset($_POST['login'])){
   	$username=$_POST['username'];
    $password=$_POST['password'];

   
       //ensure that form field are filled properly
       if(empty($username)&&empty($password)){
          array_push($errors, "Enter Username & Password");
       }else if(empty($username)){
          array_push($errors, "Enter Username");
       }else if(empty($password)){
          array_push($errors, "Enter Password");
       }else{

       
       	//$passwords=md5($password);
       
       $query=mysqli_query($db,"SELECT USERNAME,PASSWORD FROM USERDETAILS WHERE USERNAME='$username' AND PASSWORD='$password'");

         if(count($errors) ==0 && mysqli_num_rows($query)>0){  
            $_SESSION['SUCCESS'];
           //$_SESSION['SUCCESS']="You are now logged in";
           header('location: teacher_home.php');//redirect to home

         }else{
         	array_push($errors, "Invalid Login");

         }
         
        }
      }

if(isset($_POST['loginStu'])){
    $username=$_POST['usernameS'];
    $password=$_POST['passwordS'];

   
       //ensure that form field are filled properly
       if(empty($usernameS)&&empty($passwordS)){
          array_push($errors, "Enter Username & Password");
       }else if(empty($usernameS)){
          array_push($errors, "Enter Username");
       }else if(empty($passwordS)){
          array_push($errors, "Enter Password");
       }else{

       
        //$passwords=md5($password);
       
       $query=mysqli_query($db,"SELECT USERNAME,PASSWORD FROM USER WHERE USERNAME='$usernameS' AND PASSWORD='$passwordS'");

         if(count($errors) ==0 && mysqli_num_rows($query)>0){  
            $_SESSION['SUCCESS'];
           //$_SESSION['SUCCESS']="You are now logged in";
           header('location: supplier.php');//redirect to home

         }else{
          array_push($errors, "Invalid Login");

         }
         
        }
      }



      if(isset($_POST['loginAdmin'])){
    $username=$_POST['usernameA'];
    $password=$_POST['passwordA'];

   
       //ensure that form field are filled properly
       if(empty($usernameS)&&empty($passwordS)){
          array_push($errors, "Enter Username & Password");
       }else if(empty($usernameS)){
          array_push($errors, "Enter Username");
       }else if(empty($passwordS)){
          array_push($errors, "Enter Password");
       }else{

       
        //$passwords=md5($password);
       
       $query=mysqli_query($db,"SELECT USERNAME,PASSWORD FROM USERADMIN WHERE USERNAME='$usernameA' AND PASSWORD='$passwordA'");

         if(count($errors) ==0 && mysqli_num_rows($query)>0){  
            $_SESSION['SUCCESS'];
           //$_SESSION['SUCCESS']="You are now logged in";
           header('location: admin_home.php');//redirect to home

         }else{
          array_push($errors, "Invalid Login");

         }
         
        }
      }
      
     
          if(isset($_POST['login2'])){
              $adpassword=$_POST['adpassword'];;
            if($adpassword=="inventory"){
              header('location: user.php'); 
            }
       
          }

      
      if(isset($_POST['Product'])){
      	
           header('location: products.php');//redirect to products


      }

      if(isset($_POST['loginStu'])){
      	   header('location: student_home2.php');
           //header('location: attendance_record_stu.php');//redirect to supplier

      }

      if(isset($_POST['loginAdmin'])){
           header('location: admin_home.php');
           //header('location: attendance_record_stu.php');//redirect to supplier

      }

      if(isset($_POST['teacher'])){
      	
           header('location: teacher_details.php');//redirect to supplier
      }

      if(isset($_POST['Employee'])){
      	
           header('location: employee.php');//redirect to supplier
      }


      if(isset($_POST['Sales'])){
      	
           header('location: sales.php');//redirect to supplier
      }

      if(isset($_POST['Purchase'])){
      	
           header('location: purchase.php');//redirect to supplier
      }

      if(isset($_POST['User'])){
      	
           header('location: login2.php');//redirect to supplier
      }


      //options in product
      if(isset($_POST['proinsert'])){
          $finger_id=$_POST['finger_id'];
      	  $teacher_id=$_POST['teacher_id'];
          $name=$_POST['name'];
          $teaaddress=$_POST['teaaddress'];
          $teaemail=$_POST['teaemail'];
          $teacontact=$_POST['teacontact'];
          $List=$_POST['List'];
          $time=$_POST['time'];
          /*$cost=$_POST['cost'];
          $unitprice=$_POST['unitprice'];
          $List=$_POST['List'];
          $List1=$_POST['List1'];
          $List2=$_POST['List2'];*/
          
            $query=mysqli_query($db,"INSERT INTO TEACHER VALUES ('$teacher_id','$name','$List','$time')");
            echo "<script type='text/javascript'>alert('Successfully Inserted');
                window.location='products.php';
                </script>";


            $teaemail=md5($teaemail);
            $query2=mysqli_query($db,"INSERT INTO TEACHER2 VALUES ('$finger_id','$teacher_id','$name','$teaaddress','$teaemail','$teacontact')");
            echo "<script type='text/javascript'>alert('Successfully Inserted');
                window.location='products.php';
                </script>";
           
        }
    
        if(isset($_POST['prodelete'])){
      	   $teacher_id=$_POST['teacher_id'];
           $query=mysqli_query($db,"DELETE FROM TEACHER2 WHERE TEACHER_ID=$teacher_id");
                echo "<script type='text/javascript'>alert('Successfully deleted');
                window.location='products.php';
                </script>";
        }

        if(isset($_POST['proview'])){
      	   $teacher_id=$_POST['teacher_id'];
      	   

          
           $query=mysqli_query($db,"SELECT * FROM TEACHER2 WHERE TEACHER_ID=$teacher_id");
           while ($row    = mysqli_fetch_array($query,MYSQLI_NUM))

            {
            	  $finger_id=$row[0];
                $teacher_id=$row[1];
                $name=$row[2];
                $teaaddress=$row[3];
                $teaemail=$row[4];
                $teacontact=$row[5];


          
            }

        }

        if(isset($_POST['proclear'])){
      	  
      	        $finger_id="";
                $teacher_id="";
                $name="";
                $teaaddress="";
                $teaemail="";
                $teacontact="";
          
          header('location: products.php');
            
          }

          if(isset($_POST['proupdate'])){
           	
      	  $teacher_id=$_POST['teacher_id'];
          $name=$_POST['name'];
          $teaaddress=$_POST['teaaddress'];
          $teaemail=$_POST['teaemail'];
          $teacontact=$_POST['teacontact'];
          $List=$_POST['List'];
          $time=$_POST['time'];
          
           
           $query=mysqli_query($db,"UPDATE TEACHER2 SET NAME='$name',SUBJECT_ID='$List',TIME_SLOT='$time' WHERE TEACHER_ID=$teacher_id");
           echo "<script type='text/javascript'>alert('Successfully Updated');
                window.location='products.php';
                </script>";
            
          }

          //options in supplier
          if(isset($_POST['supinsert'])){
          $fingerprint_id=$_POST['fingerprint_id'];
      	  $student_id=$_POST['student_id'];
          $student_name=$_POST['student_name'];
          $stuaddress=$_POST['stuaddress'];
          $stuemail=$_POST['stuemail'];
          $stucontact=$_POST['stucontact'];
          //$_SESSION['SUCCESS'];
            $query=mysqli_query($db,"INSERT INTO STUDENT VALUES ('$fingerprint_id','$student_id','$student_name','$stuaddress','$stuemail','$stucontact')");
            echo "<script type='text/javascript'>alert('Successfully Inserted');
                window.location='supplier.php';
                </script>";
           
          }

          if(isset($_POST['supdelete'])){
      	    $student_id=$_POST['student_id'];
           $query=mysqli_query($db,"DELETE FROM STUDENT WHERE STUDENT_ID=$student_id");
                echo "<script type='text/javascript'>alert('Successfully deleted');
                window.location='supplier.php';
                </script>";
          }

           if(isset($_POST['supview'])){
      	   $student_id=$_POST['student_id'];
    
           $query=mysqli_query($db,"SELECT * FROM STUDENT WHERE STUDENT_ID=$student_id");
           while ($row    = mysqli_fetch_array($query,MYSQLI_NUM)){
            $fingerprint_id=$row[0];
            $student_id=$row[1];
            $student_name=$row[2];
            $stuaddress=$row[3];
            $stuemail=$row[4];
            $stucontact=$row[5];

          
           }
          }

           if(isset($_POST['supclear'])){
           	
      	    $student_id="";
            $student_name="";
            $stuaddress="";
            $stuemail="";
            $stucontact="";
          
            header('location: supplier.php');
            
          }

          if(isset($_POST['supupdate'])){
           	
      	   $student_id=$_POST['student_id'];
           $student_name=$_POST['student_name'];
           $stuaddress=$_POST['stuaddress'];
           $stuemail=$_POST['stuemail'];
           $stucontact=$_POST['stucontact'];
           
           $query=mysqli_query($db,"UPDATE STUDENT SET NAME='$student_name',ADDRESS='$stuaddress',EMAIL='$stuemail',CONTACT_NO='$stucontact' WHERE STUDENT_Id=$student_id");
           echo "<script type='text/javascript'>alert('Successfully Updated');
                window.location='supplier.php';
                </script>";
            
          }

          //options in customer
          if(isset($_POST['cusinsert'])){
      	   $customerid=$_POST['customerid'];
           $customername=$_POST['customername'];
           $cusaddress=$_POST['cusaddress'];
           $cuscontactno=$_POST['cuscontactno'];
           $query=mysqli_query($db,"INSERT INTO CUSTOMER VALUES ('$customerid','$customername','$cusaddress','$cuscontactno')");
           echo "<script type='text/javascript'>alert('Successfully Inserted');
                window.location='customer.php';
                </script>";
             //header('location: customer.php');//redirect to supplier
           
          }

          if(isset($_POST['cusdelete'])){
      	    $customerid=$_POST['customerid'];
           $query=mysqli_query($db,"DELETE FROM CUSTOMER WHERE CustomerId=$customerid");
                echo "<script type='text/javascript'>alert('Successfully deleted');
                window.location='customer.php';
                </script>";
          }

          if(isset($_POST['cusview'])){
      	   $customerid=$_POST['customerid'];
    
           $query=mysqli_query($db,"SELECT * FROM CUSTOMER WHERE CustomerId=$customerid");
           while ($row    = mysqli_fetch_array($query,MYSQLI_NUM)){

            $customerid=$row[0];
            $customername=$row[1];
            $cusaddress=$row[2];
            $cuscontactno=$row[3];
            
          
           }
          }

          if(isset($_POST['cusclear'])){
           	
      	    $customerid="";
            $customername="";
            $cusaddress="";
            $cuscontactno="";
           header('location: customer.php');
            
          }
          if(isset($_POST['cusupdate'])){
           	
      	   $customerid=$_POST['customerid'];
           $customername=$_POST['customername'];
           $cusaddress=$_POST['cusaddress'];
           $cuscontactno=$_POST['cuscontactno'];
           
           $query=mysqli_query($db,"UPDATE CUSTOMER SET CusName='$customername',Address='$cusaddress',ConNo='$cuscontactno' WHERE CustomerId=$customerid");
           echo "<script type='text/javascript'>alert('Successfully Updated');
                window.location='customer.php';
                </script>";
            
          }

          if(isset($_POST['empinsert'])){
      	   $employeeid=$_POST['employeeid'];
           $employeename=$_POST['employeename'];
           $empgender=$_POST['empgender'];
           $empaddress=$_POST['empaddress'];
           $empconno=$_POST['empconno'];
           $empdob=$_POST['empdob'];
           $jobtype=$_POST['jobtype'];
           $empsalary=$_POST['empsalary'];
           
           $query=mysqli_query($db,"INSERT INTO EMPLOYEE VALUES ('$employeeid','$employeename','$empgender','$empaddress','$empconno','$empdob','$jobtype','$empsalary')");
           echo "<script type='text/javascript'>alert('Successfully Inserted');
                window.location='employee.php';
                </script>";
             //header('location: products.php');//redirect to supplier
           
          }

          if(isset($_POST['empdelete'])){
      	    $employeeid=$_POST['employeeid'];
           $query=mysqli_query($db,"DELETE FROM EMPLOYEE WHERE EmpId=$employeeid");
                echo "<script type='text/javascript'>alert('Successfully deleted');
                window.location='employee.php';
                </script>";

          }


          if(isset($_POST['empview'])){
      	   $employeeid=$_POST['employeeid'];
    
           $query=mysqli_query($db,"SELECT * FROM EMPLOYEE WHERE EmpId=$employeeid");
           //$query=mysqli_query($db,"SELECT EmpId,EmpName,EmpType FROM EMPLOYEE");
          // if (mysqli_num_rows($query) > 0) {
           while ($row    = mysqli_fetch_array($query,MYSQLI_NUM)){
           /*
           while($row = mysqli_fetch_assoc($query)) {
           	echo "Empid: " . $row["EmpId"]. " - EmpName: " . $row["EmpName"]. " " . $row["EmpType"]. "<br>";
           }

           */
           	
            $employeeid=$row[0];
            $employeename=$row[1];
            $empgender=$row[2];
            //$value="$empgender";
            //$value=$row[2];
            $empaddress=$row[3];
            $empconno=$row[4];
            $empdob=$row[5];
            $jobtype=$row[6];
            $empsalary=$row[7];

            
            //echo "$empgender";
              //if($value=="$empgender"){
                   //echo "$value";
              //}
            }
           //}
          }

          

          if(isset($_POST['empclear'])){
           	$employeeid="";
            $employeename="";
            $empgender="";
            $empaddress="";
            $empconno="";
            $empdob="";
            $jobtype="";
            $empsalary="";
      	    
           header('location: employee.php');
            
          }

          if(isset($_POST['empupdate'])){
           	
      	   $employeeid=$_POST['employeeid'];
           $employeename=$_POST['employeename'];
           $empgender=$_POST['empgender'];
           $empaddress=$_POST['empaddress'];
           $empconno=$_POST['empconno'];
           $empdob=$_POST['empdob'];
           $jobtype=$_POST['jobtype'];
           $empsalary=$_POST['empsalary'];
           
           $query=mysqli_query($db,"UPDATE EMPLOYEE SET EmpName='$employeename',Gender='$empgender',Address='$empaddress',ConNo='$empconno',DOB='$empdob',EmpType='$jobtype' WHERE EmpId='$employeeid'");
          
           echo "<script type='text/javascript'>alert('Successfully Updated');
                window.location='employee.php';
                </script>";
           

          }

          if(isset($_POST['purview'])){

          	header('location: disppurchase.php');
          }

          if(isset($_POST['salview'])){

          	header('location: dispsale.php');
          }
      

          if(isset($_POST['salinsert'])){
      	   $salesid=$_POST['salesid'];
           $scustomerid=$_POST['scustomerid'];
           $sproductid=$_POST['sproductid'];
           $sunitprice=$_POST['sunitprice'];
           $sqnty=$_POST['sqnty'];
           
           $query=mysqli_query($db,"INSERT INTO SALES VALUES ('$salesid','$scustomerid','$sproductid','$sunitprice','$sqnty')");
             //header('location: sales.php');//redirect to supplier
           echo "<script type='text/javascript'>alert('Successfully Inserted');
                window.location='sales.php';
                </script>";
           
          }

          if(isset($_POST['salclear'])){
           $salesid="";
           $scustomerid="";
           $sproductid="";
           $sunitprice="";
           $sqnty="";
      	    
           header('location: sales.php');
            
          }

          if(isset($_POST['purinsert'])){
      	   $purchaseid=$_POST['purchaseid'];
           $psupplierid=$_POST['psupplerid'];
           $pproductid=$_POST['pproductid'];
           $punitprice=$_POST['punitprice'];
           $pqnty=$_POST['pqnty'];
           
           $query=mysqli_query($db,"INSERT INTO PURCHASE VALUES ('$purchaseid','$psupplerid','$pproductid','$punitprice','$pqnty')");
            // header('location: purchase.php');//redirect to supplier
           echo "<script type='text/javascript'>alert('Successfully Inserted');
                window.location='products.php';
                </script>";
           
          }


          if(isset($_POST['purclear'])){
           $purchaseid="";
           $psupplierid="";
           $pproductid="";
           $punitprice="";
           $pqnty="";
      	    
           header('location: purchase.php');
            
          }

          if(isset($_POST['uinsert'])){
      	   $userid=$_POST['userid'];
           $username=$_POST['username'];
           $upassword=$_POST['upassword'];
           
           $query=mysqli_query($db,"INSERT INTO USERDETAILS VALUES ('$userid','$username','$upassword')");
             //header('location: sales.php');//redirect to supplier
           echo "<script type='text/javascript'>alert('Successfully Inserted');
                window.location='user.php';
                </script>";
           
          }

           if(isset($_POST['udelete'])){
      	    $userid=$_POST['userid'];
           $query=mysqli_query($db,"DELETE FROM USERDETAILS WHERE USERId=$userid");
                echo "<script type='text/javascript'>alert('Successfully deleted');
                window.location='user.php';
                </script>";

          }

          if(isset($_POST['uview'])){
      	  $userid=$_POST['userid'];
    
           $query=mysqli_query($db,"SELECT * FROM USERDETAILS WHERE USERID=$userid");
          
          
           while ($row    = mysqli_fetch_array($query,MYSQLI_NUM)){
         
           	
            $userid=$row[0];
            $username=$row[1];
            $upassword=$row[2];
            
            }
           
          }

          if(isset($_POST['uclear'])){
           	$userid="";
            $username="";
            $upassword="";
      	    
           header('location: user.php');
            
          }

          if(isset($_POST['uupdate'])){
           	
      	    $userid=$_POST['userid'];
            $username=$_POST['username'];
            $upassword=$_POST['upassword'];
           
           $query=mysqli_query($db,"UPDATE USERDETAILS SET USERID='$userid',USERNAME='$username',PASSWORD='$upassword' WHERE USERID=$userid");
          
           echo "<script type='text/javascript'>alert('Successfully Updated');
                window.location='user.php';
                </script>";
           

          }

/*

           if( mysql_num_row( $query){
            $row = mysql_fetch_assoc( $query ) //get one (first) result
            }
           $productname=$row['PRODNAME'];

*/
        


      if(!$db){
   echo "Error: " . mysqli_error($link);
   }

?>

