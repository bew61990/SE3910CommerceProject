<?php
   //include('config.php');
   session_start();
   
   //$user_check = $_SESSION['username'];
   
   //$ses_sql = mysqli_query($db,"select username from users where username = '$user_check' ");
   
   //$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   //$login_session = $row['username'];
   
   if(!isset($_SESSION['username']))
   {
	   header("Location: http://localhost/test2Prototype/login2.php");
       
	   die();
   }
   
   // this following section was shooting me back to login
   //if(!isset($_SESSION['login_user'])){
    //  header("location:login2.php");
     // die();
   //}
?>