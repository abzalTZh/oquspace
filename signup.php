<?php
session_start();
require_once("includes/connect.php");
require_once("includes/if-loggedin.php");
if(isset($_POST) & !empty($_POST)){
    // PHP Form Validations
    if(empty($_POST['username'])){ $errors[]="User Name field is Required"; }else{
        // Check Username is Unique with DB query
        $sql = "SELECT * FROM users WHERE username=?";
        $result = $db->prepare($sql);
        $result->execute(array($_POST['username']));
        $count = $result->rowCount();
        if($count == 1){
            $errors[] = "User Name already exists in database";
        }
    }
    if(empty($_POST['email'])){ $errors[]="E-mail field is Required"; }else{
        // Check Email is Unique with DB Query
        $sql = "SELECT * FROM users WHERE email=?";
        $result = $db->prepare($sql);
        $result->execute(array($_POST['email']));
        $count = $result->rowCount();
        if($count == 1){
            $errors[] = "E-Mail already exists in database";
        }
    }
    if(empty($_POST['password'])){ $errors[]="Password field is Required"; }else{
        // check the repeat password
        if(empty($_POST['passwordr'])){ $errors[]="Repeat Password field is Required"; }else{
            // compare both passwords, if they match. Generate the Password Hash
            if($_POST['password'] == $_POST['passwordr']){
                // create password hash
                $pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
            }else{
                // Display Error Message
                $errors[] = "Both Passwords Should Match";
            }
        }
    }

    // CSRF Token Validation
    if(isset($_POST['csrf_token'])){
        if($_POST['csrf_token'] === $_SESSION['csrf_token']){
        }else{
            $errors[] = "Problem with CSRF Token Validation";
        }
    }
    // CSRF Token Time Validation
    $max_time = 60*60*24; // in seconds
    if(isset($_SESSION['csrf_token_time'])){
        $token_time = $_SESSION['csrf_token_time'];
        if(($token_time + $max_time) >= time() ){
        }else{
            $errors[] = "CSRF Token Expired";
            unset($_SESSION['csrf_token']);
            unset($_SESSION['csrf_token_time']);
        }
    }

    // If no Errors, Insert the Values into users table
    if(empty($errors)){
        $sql = "INSERT INTO users (full_name, username, password, email) VALUES (:full_name, :username, :password, :email)";
        $result = $db->prepare($sql);
        $values = array(':full_name'     => $_POST['full_name'],
                        ':username'     => $_POST['username'],
                        ':password'     => $pass_hash,
                        ':email'        => $_POST['email']
                        );
        $res = $result->execute($values);
        header("location: dashboard.php");
    }
}
// CSRF Protection
// 1. Create CSRF token
$token = md5(uniqid(rand(), TRUE));
$_SESSION['csrf_token'] = $token;
$_SESSION['csrf_token_time'] = time();

// 2. add CSRF token to form
// 3. check the CSRF token on form submission
?>

<html>

<head>
    <link rel="stylesheet" href="css/signup.css">
    <link rel="shortcut icon" href="img-s/oquspace.ico" type="image/x-icon" />
    <title>Sign Up</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
        <h1>Sign Up</h1>
        <?php
            if(!empty($errors)){
                echo "<div class='alert alert-danger'>";
                foreach ($errors as $error) {
                    echo "<span class='glyphicon glyphicon-remove'></span>&nbsp;".$error."<br>";
                }
                    echo "</div>";
                }
        ?>

        <?php
            if(!empty($messages)){
                echo "<div class='alert alert-success'>";
                foreach ($messages as $message) {
                    echo "<span class='glyphicon glyphicon-ok'></span>&nbsp;".$message."<br>";
                }
                echo "</div>";
            }
        ?>

        <form id="form" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo $token; ?>">
            <div id="signup-forms">
                <div class="user-box">
                    <input type="text" name="full_name" id="full_name" value="<?php if(isset($_POST['full_name'])){ echo $_POST['full_name']; } ?>">
                    <br>
                    <label>Full Name</label>
                </div>

                <div class="user-box">
                    <input type="text" name="email" id="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>">
                    <br>
                    <label>Email</label>
                </div>
            </div>
            <div class="user-box">
                <input type="text" name="username" id="username" value="<?php if(isset($_POST['username'])){ echo $_POST['username']; } ?>">
                <br/>
                <label>Username:</label>
            </div>
            <br>
            <div class="user-box">
                <input type="password" name="password" id="pass1">
                <label>Password:</label>
            </div>
            <br>
            <div class="user-box">
                <input type="password" name="passwordr" id="pass1">
                <label>Repeat Password:</label>
            </div>
            <a href="">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <button type="submit" name="submit" id="login-btn" class="btttn">Sign Up</button>
            </a>
        </form>
</body>

</html>