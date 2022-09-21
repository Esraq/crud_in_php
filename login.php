<?php

session_start();

?>



<html>
   <head>
     <title>Registration form</title>
	</head>
	  <style type='text/css'>
	  body{
		  
		  background:url('orginal.jpg');background-repeat:no-repeat;background-size:100% 100%;
	  }
	  </style>
      <body>
	  <form method='post' action='login.php'>
       <table width='400' border='5' align='center'>
	      <tr>
		    <td colspan='5' align='center'><h1>Login Form</h1></td>
		  </tr>
          		 
          
             <tr>
             <td>Email:</td>
             <td><input type='text' name='email' /></td>
           </tr>
		    <tr>
             <td>User Password:</td>
             <td><input type='password' name='password' /></td>
           </tr>
             <tr>
               <td colspan='5' align='center'> <input type='submit' name='Login' value='Login' /> </td>
              </tr>
			  </table>
             </form>			  
                <center>
				 <font color='red' size='6'>Not registered yet?</font><a href='index.html'>Signup Here</a></font>
				 </center>

      </body>
</html>
<?php
include('connection.php');

    if(isset($_POST['Login'])){
		
		$email=$_POST['email'];
		$pword=$_POST['password'];


        $sql = "select *from users where email = '$email' and password = '$pword'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION['email']=$email;
			echo "<script>window.open('welcome.php','_self')</script>";;  
        }  
        else{  
            
            
            echo "<script>alert('Email or password is not match')</script>";

        }     

    
		
    }

    
?>	  