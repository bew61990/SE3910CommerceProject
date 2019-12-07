<html>
    
    <?php 
    include("config.php");
    include('session.php');
    //session_start();
    $error="";
    
    
    
    
    /*if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $searchuser = mysqli_real_escape_string($db,$_POST['searchuser']);
        
        if(isset($searchuser))
        {
            
            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "sportschatapp";
            $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
            
            if (mysqli_connect_error()){
                die('Connect Error ('.mysqli_connect_errno() .') '
                    . mysqli_connect_error());
            }
            else{
    
    
            $sql = "SELECT username,email FROM users WHERE username LIKE '$searchuser%'";// WHERE username = '$searchuser'*";
            $result = mysqli_query($db,$sql);
                
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
            {
                echo "<table"
                echo $row['username'] , $row['email'];
            }
        }
    }
            
        else{
            $error = "Please enter a search.";
        }
        
    }*///here
    ?>
    
    <head>
	   <title>Search Page</title>
	   <style>
		form{padding-top: 20px;
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
  <?php //<li><a href="homepage.php">Return To Homepage</a></li>
     //<li><a href="team.php">View Teams</a></li> ?>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Join A Chat</a>
    <div class="dropdown-content">
      <a href="images/index.php">General Chat</a>
      <a href="images/index2.php">Game Day Chat</a>
    </div>
  </li>
     <li align="right"><a href="search.php">Search</a></li>
</ul>

  <h1>Search for Users</h1> 
        <form method="post" action="search.php">
            
        <label>User: </label><input type = "text" name = "searchuser" class = "box"/><input type = "submit" value = " Submit "/><br />
        
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $searchuser = mysqli_real_escape_string($db,$_POST['searchuser']);
        
        
            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "sportschatapp";
            $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
            
            if (mysqli_connect_error()){
                die('Connect Error ('.mysqli_connect_errno() .') '
                    . mysqli_connect_error());
            }
            else{
            
    
            $sql = "SELECT username,email FROM users WHERE username LIKE '$searchuser%'";// WHERE username = '$searchuser'*";
            $result = mysqli_query($db,$sql);
                
                echo "<table border=1 align=center><tr><td>Username</td><td>Email</td></tr>";
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
            {
                echo "<tr><td>".$row['username'] . "</td><td>" . $row['email'] . "</td></tr>";
            }
                echo "</table>";
        }
    
        
    }?>
        <?php echo $error;
        ?>
        
        
        
   </body>
   
    
    
</html>