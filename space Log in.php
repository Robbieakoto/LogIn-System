<!DOCTYPE html>
<html>

<head>
    <ttile></ttile>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" >
    <link rel="stylesheet" href="test.css">
</head>

<body>
    <?php 
	include 'session.php';
	include 'welcome.php'; 
	?>
   
    <center>


        <h1>Login </h1>


        
        <div class="container border-round"><br><br>
            <div class=" box">
                <a href="images/robbie.jpg">
                    <img alt="Profile Picture" src="images/knuts.png" width="80" height="80" />
                    
                </a><br><br><br>
                <form method="POST" action="land.html" class="Log In">
                    <input type="text" name="username" placeholder="Username" required><br><br>
                    <input type="password" name="password" placeholder="Password" required> <br><br>
                    <br> <button name="log_in">Log In</button>
                    <br><br>
                    <input type="Checkbox" name="">Keep me Logged In
                    <p class="message">Not registered? <a href="space Sign Up.php">Sign Up</a></p>


                </form>
            </div>
        </div>
        </div>


    </center>



</body>

</html>