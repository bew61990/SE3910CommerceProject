<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
	<style>
		form{padding-top: 120px;
			text-align:center;
		font-size:30px;}
		input{width: 250px;
		height: 40px;
		font-size: 30px;}
	</style>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    
    <div class="wrapper">
            <div class="container">
                <!-- Header -->
                <header>
                    <h1>Sport Meet</h1>
                    <h2>Like a Sports Bar, but without the Beer</h2>
                    The one stop shop for all your online chatting! Find your team and others with the same interest and chat away!	
                </header>


                <!-- Main content area -->
                <main>
                    
                    
<form method="post" action="connect2.php">
    <table border="0">
    <tr>
    <td>Email: <input type="text" size="3" class="stretch" name="email" placeholder="example@site.com" required />
        </td></tr>
    <tr><td>
    Username: <input type="text" name="username" size="3" class="stretch" placeholder="example123" required><br><br>
        </td></tr>
    <tr><td>
    Password: <input type="password" name="password" size="3" class="stretch" placeholder="***" required>
    
        </td></tr>
        <tr><td><input type="submit" class="stretch" size="3" value="Register" /></td></tr>
        
    </table>

</form>

</main>
    <!-- Footer -->
                <footer>
				
						<p>Already A Member?<a  href = "login2.php">Log In</a></p>
                        <!--<p>Free CSS Template from <a href="https://zypopwebtemplates.com/">ZyPop</a>.</p>-->
                </footer>
                </div>
        </div>

</body>
</html>

<!-- https://www.youtube.com/watch?v=OHjkg_rifTw 
https://www.codeandcourse.com/how-to-connect-html-form-to-mysql-database-using-php-in-4-minutes/
-->