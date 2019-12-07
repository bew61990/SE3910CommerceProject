<?php
#session start
session_start();
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $error="";
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
      $email = mysqli_real_escape_string($db,$_POST['email']); 

if (!empty($username)){
if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";//change these to be appropriate to your setup
#$dbpassword = "root";//change these to be appropriate to your setup
$dbname = "sportschatapp"; // the overall database
//create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('.mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
    
    
    $sql = "SELECT user_id FROM users WHERE username = '$username' and pass = SHA2('$password',256)";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 0) {
         //session_register("myusername");
        $sql = "INSERT INTO users (username, pass, email)
        values ('$username',SHA2('$password',256),'$email')";
          if ($conn->query($sql)){
              echo "New record is inserted successfully";
              
            //$_SESSION['username'] = $username;
              //$_SESSION['pass'] = $password;
         //$homepage = "";
         header("location: login2.php");
		 
      }else {
         $error = "Your Login Name or Password is invalid";
      }
    

}
else{
    $error= "User already exists";
    $_SESSION['error'] = $error;
    header("location: login2.php");
    //header("location: homepage.php");
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
}
?>
<br><br><br>

<?php 
     ?>

<a href="test2Prototype/login2.php">
    <button>Click here to return to login</button>
</a>