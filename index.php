<?php


include 'connection.php';



 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $username=$_POST['username'];
 $pword=$_POST['password'];
 $email=$_POST['email'];
 $agree=$_POST['agree'];
 $confirm_password=$_POST['confirm_password'];

  if($firstname==""){
  
    echo "Enter firstname";
  
  }
  else if( $lastname==""){
	  
	  
	   echo "Enter lastname";
	  
  }
   else if( $username==""){
	  
	  
	   echo "Enter usename";
	  
  }
 else if($pword=="")
 {
	 
	 echo "Enter password";
	 
 }
else if($pword!=$confirm_password)
 {
	 
	 echo "Password not matched";
	 
 }
 else if($agree==""){
	 
	 
		 
		  echo "Click Agree";
		 
	 }	 
 


else{
	
	
	
	
$sql = "INSERT INTO users (firstname,lastname,username,password,email,agree)
VALUES ('$firstname','$lastname','$username','$pword','$email','$agree')";
	
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	
	
	
	
}
	 

?>