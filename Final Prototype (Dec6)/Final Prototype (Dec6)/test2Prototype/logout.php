<?php
   session_start();
   
   setcookie("user","",time()-3600);
   header("Location: http://localhost/login2.php");
   
   if(session_destroy()) {
	  setcookie("user","",time()-3600);
      header("Location: login2.php");
   }
?>