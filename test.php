<?php

session_start();
if(!$_SESSION['email']){
	
	header("location: login.php");
	
}
?>

<html>

   <head>
       <title>Eisty</title>
   </head>

       <body>

           I am from test page

       </body>
        
</html>