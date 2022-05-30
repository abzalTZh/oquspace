<?php
session_start();
require_once("includes/connect.php");
require_once("includes/if-loggedin.php");
if(isset($_POST) & !empty($_POST)){
    // PHP Form Validations
    if(empty($_POST['username'])){ $errors[]="User Name / E-Mail field is Required"; }
    if(empty($_POST['password'])){ $errors[]="Password field is Required"; }
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

    if(empty($errors)){
        // Check the Login Credentials
        $sql = "SELECT * FROM admins WHERE ";
        if(filter_var($_POST['username'], FILTER_VALIDATE_EMAIL)){
            $sql .= "email=?";
        }else{
            $sql .= "username=?";
        }
        $result = $db->prepare($sql);
        $result->execute(array($_POST['username']));
        $count = $result->rowCount();
        $res = $result->fetch(PDO::FETCH_ASSOC);
        if($count == 1){
            // Compare the password with password hash
            if(password_verify($_POST['password'], $res['password'])){
                // regenerate session id
                session_regenerate_id();
                $_SESSION['login'] = true;
                $_SESSION['id'] = $res['id'];
                $_SESSION['last_login'] = time();

                // redirect the user to members area/dashboard page
                header("location: adm_dashboard.php");
            }else{
                $errors[] = "User Name / E-Mail & Password Combination not Working";
            }
        }else{
            $errors[] = "User Name / E-Mail not Valid";
        }
    }
} 
// 1. Create CSRF token
$token = md5(uniqid(rand(), TRUE));
$_SESSION['csrf_token'] = $token;
$_SESSION['csrf_token_time'] = time();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link rel="shortcut icon" href="img-s/oquspace.ico" type="image/x-icon" />
    <title>OquSpace community</title>
</head>
<body>
    <div id="allrecords">
        <div class="log-in-container">
            <img src="img-s/logo-long.png" class="logo">
            <div class="login-box">
                <?php
                    if(!empty($errors)){
                        echo "<div class='alert alert-danger'>";
                        foreach ($errors as $error) {
                            echo "<span class='glyphicon glyphicon-remove'></span>&nbsp;".$error."<br>";
                        }
                        echo "</div>";
                    }
                ?>
                <form action=" " method="post">
                <input type="hidden" name="csrf_token" value="<?php echo $token; ?>">
                    <div class="user-box">
                        <label>Username:</label>
                        <input class="input" id="username" name="username" size="20" type="text" value="<?php if(isset($_POST['username'])){ echo $_POST['username']; } ?>">
                    </div>
                    <br>
                    <div class="user-box">
                        <label>Password:</label>
                        <input class="input" id="password" name="password" size="20" type="password" value="">
                    </div>
                    <a>
                        <button type="submit" name="login" id="login-btn" class="btttn">Log In</button>
                    </a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>