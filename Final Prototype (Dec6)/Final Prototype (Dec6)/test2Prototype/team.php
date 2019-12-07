<?php 
    include("config.php");
    include('session.php');
    //session_start();
?>
<head>
	<title>Teams</title>
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
  <li><a href="homepage.php">Return To Homepage</a></li>
     <li><a href="team.php">View Teams</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Join A Chat</a>
    <div class="dropdown-content">
      <a href="images/index.php">General Chat</a>
      <a href="images/index2.php">Game Day Chat</a>
    </div>
  </li>
     <li align="right"><a href="../search.php">Search</a></li>
</ul>

    <h1>Team Page</h1>
  <h1>Welcome <?php echo $_SESSION['username']; ?></h1> 
	  <h2>from here we could import details about the user from a database The 2nd and beyond chats are not here</h2>
   </body>
   



