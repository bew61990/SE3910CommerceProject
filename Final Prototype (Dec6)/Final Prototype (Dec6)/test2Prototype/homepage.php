<html>
<?php
   include('config.php');
    include('session.php');
    //session_start();

    $username=$_SESSION['username'];
    //$pass = $_SESSION['pass'];

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "sportschatapp";
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['username'])){
      // username and password sent from form 
      $error="";
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['pass']); 
      $email = mysqli_real_escape_string($db,$_POST['email']); 
        $id=$_SESSION['id'];
        
        
      $sql = "UPDATE users SET username='$username' WHERE user_id=$id";
      $result = mysqli_query($db,$sql);
     // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        
      $sql = "UPDATE users SET email='$email' WHERE user_id=$id";
      $result = mysqli_query($db,$sql);
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        
      $sql = "UPDATE users SET pass=SHA2('$password',256) WHERE user_id=$id";
      $result = mysqli_query($db,$sql);
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        }
    
    }


            
    if (mysqli_connect_error()){
        die('Connect Error ('.mysqli_connect_errno() .') '
            . mysqli_connect_error());
    }
    else{
        $id=$_SESSION['id'];
        $sql = "SELECT username,email FROM users WHERE user_id='$id'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        //echo $row['username'];
        //echo $row['email'];
    }





?>

<head>
	<title>Homepage</title>
	<style>
		form{padding-top: 120px;
			text-align:center;
		font-size:30px;}
		input{width: 250px;
		height: 40px;
		font-size: 30px;}
	</style>
</head>

<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>



 <body>
 
 
 
  <ul>
  <li><a href="logout.php">Sign Out</a></li>
      
  <li class="dropdown">
    <a href="homepage.php" class="dropbtn">Homepage</a>
    <div class="dropdown-content">
      <a href="edit.php">Edit Profile</a>
    </div>
      <?php 
  //<li><a href="homepage.php">Homepage</a></li>
      //<li><a href="team.php">View Teams</a></li>?>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Join A Chat</a>
    <div class="dropdown-content">
      <a href="images/index.php">General Chat</a>
      <a href="images/index2.php">Game Day Chat</a>
    </div>
  </li>
      <li align="right"><a href="search.php">Search</a></li>
</ul>
 
 
 
 
    <h1>Homepage</h1> 
	  <h2>Username: <?php echo $row['username']; ?></h2>
     <h2>Email: <?php echo $row['email']; ?></h2>
     <a href="edit.php">
				<button>Click here to edit info above.</button>
			</a>
   </body>
</html>
   
   
   
 