<?php

session_start();
if(!$_SESSION['email']){
	
	header("location: login.php");
	
}
?>


<html>
  <head>
    <title>welcome.php</title>
  </head>
      <style type='text/css'>
      body{
	  
	  background:url('green.jpg');background-repeat:no-repeat;background-size:100% 100%;
	  
	  }	  
	  </style>
	   <body><b>Welcome:</b><br>
	   <font color='red' size='5'>
	   <?php echo $_SESSION['email']; ?>
       
	   </font>
	    
       <a href="logout.php">logout</a>
			   
			   
			    
	
			
			  
	   <?php
 


 include('connection.php');
	
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 // Check connection
 if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
 }
 
 




 

 ?>