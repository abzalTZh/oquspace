<?php
	session_start();
	?>

	<?php
	// Mysqli database connection
$conn = mysqli_connect("localhost", "root", "", "databasename");

// Check if connection established 
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

	if(isset($_SESSION["session_username"])){
	// вывод "Session is set"; // в целях проверки
	header("Location: profile.php");
	}

	if(isset($_POST["login"])){

	if(!empty($_POST['username']) && !empty($_POST['password'])) {
	$username=htmlspecialchars($_POST['username']);
	$password=htmlspecialchars($_POST['password']);
	$query =mysqli_query($conn, "SELECT * FROM users WHERE username=$username AND password=$password");
	$numrows=mysqli_num_rows($query);
	if($numrows>0)
    {
        while($row=mysqli_fetch_assoc($query))
    {
	$dbusername=$row['username'];
    $dbpassword=$row['password'];
 }
  if($username == $dbusername && $password == $dbpassword)
 {
	// старое место расположения
	//  session_start();
	 $_SESSION['session_username']=$username;	 
 /* Перенаправление браузера */
   header("Location: index.php");
	}
	} else {
	//  $message = "Invalid username or password!";
	
	echo  "Invalid username or password!";
 }
	} else {
    $message = "All fields are required!";
	}
	}
	?>

<html>
<head>
    <link rel="stylesheet" href="../css/signup.css">
    <style>
        .b {
            visibility: hidden;
        }
        
        .f {
            color: green;
        }
    </style>
</head>

<body>

    <div class="login-box">
        <h1>Log In</h1>
        <form action=" " method="post">
            <div class="user-box">
            <input class="input" id="username" name="username" size="20" type="text" value="">
                <label>Username:</label>
            </div>
            <br>
            <div class="user-box">
                <input class="input" id="password" name="password" size="20" type="password" value="">
                <label>Password:</label>
            </div>
            <a href="signup.php" style="font-size: 80%;">Don't have an account?</a>
            <a>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <button type="submit" name="login" id="login-btn" class="btttn">Log In</button>
            </a>
        </form>
</body>

</html>