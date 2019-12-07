<?php
// based off of https://www.tutorialspoint.com/php/php_mysql_login.htm 
   include("config.php");
   session_start();
    $error="";
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $error="";
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT user_id FROM users WHERE username = '$myusername' and pass = SHA2('$mypassword',256)";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
       $userid = $row['user_id'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['username'] = $myusername;
         $_SESSION['id'] = $userid;
         $homepage = "homepage.php";
         header("location: homepage.php");
		 
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
       
      <link rel="stylesheet" href="css/login.css">
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
       <script type="javascript">
       
         <?php if($error !=""){ 
            echo "alert('$error');";}  ?>
       
       </script>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
       
       
       <div class="wrapper">
           
            <div class="container">
                <!-- Header -->
                <header>
                    <h1>Sport Meet</h1>
                    <h2>Like a Sports Bar, but without the Beer</h2>
                </header>

	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <?php //<div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div> ?>
				
            <div style = "margin:30px">
               
               <form action = "login2.php" method = "post">
                  <label>UserName  :</label><input type = "text" required name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" required name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
                
			   
				
			<a href="register2.php">
				<button>Click here to register</button>
			</a><br/>
                <div background-color="red"> <?php if(isset($error))
                         {
                            echo $error; 
                         }  ?>
                <?php if(isset($_SESSION['error']))
                         {
                            echo $_SESSION['error']; 
                         }
                        
                ?>
                    </div>
                <br>
            
		
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
					
            <?php //</div> ?>
				
         </div>
			
      </div>

   </body>
</html>