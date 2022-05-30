<?php
require_once("includes/connect.php");
if(isset($_POST) & !empty($_POST)){
    // PHP Form Validations
    if(empty($_POST['username'])){ $errors[]="User Name field is Required"; }else{
        // Check Username is Unique with DB query
        $sql = "SELECT * FROM admins WHERE username=?";
        $result = $db->prepare($sql);
        $result->execute(array($_POST['username']));
        $count = $result->rowCount();
        if($count == 1){
            $errors[] = "User Name already exists in database";
        }
    }
    if(empty($_POST['email'])){ $errors[]="E-mail field is Required"; }else{
        // Check Email is Unique with DB Query
        $sql = "SELECT * FROM admins WHERE email=?";
        $result = $db->prepare($sql);
        $result->execute(array($_POST['email']));
        $count = $result->rowCount();
        if($count == 1){
            $errors[] = "E-Mail already exists in database";
        }
    }
    if(empty($_POST['password'])){ $errors[]="Password field is Required"; }else{
        $pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    }

    // If no Errors, Insert the Values into users table
    if(empty($errors)){
        $sql = "INSERT INTO admins (full_name, username, password, email) VALUES (:full_name, :username, :password, :email)";
        $result = $db->prepare($sql);
        $values = array(':full_name'     => $_POST['full_name'],
                        ':username'     => $_POST['username'],
                        ':password'     => $pass_hash,
                        ':email'        => $_POST['email']
                        );
        $res = $result->execute($values);
        echo '
        <script>
            alert("Success!");
        </script>
        ';
        header("Location: adm_dashboard.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
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

                <?php
                    if(!empty($messages)){
                        echo "<div class='alert alert-success'>";
                        foreach ($messages as $message) {
                            echo "<span class='glyphicon glyphicon-ok'></span>&nbsp;".$message."<br>";
                        }
                        echo "</div>";
                    }
                ?>

                <form action=" " method="post">
                    <div class="user-box">
                        <label>Full Name</label>
                        <input type="text" name="full_name" id="full_name" value="<?php if(isset($_POST['full_name'])){ echo $_POST['full_name']; } ?>">
                    </div>

                    <div class="user-box">
                        <label>Email</label>
                        <input type="text" name="email" id="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>">
                    </div>
                    <div class="user-box">
                        <label>Username:</label>
                        <br>
                        <input type="text" name="username" id="username" value="<?php if(isset($_POST['username'])){ echo $_POST['username']; } ?>">
                    </div>
                    <br>
                    <div class="user-box">
                        <label>Password:</label>
                        <input type="password" name="password" id="pass1">
                    </div>
                    <br>
                    <a>
                        <button type="submit" name="login" id="login-btn" class="btttn">Sign Up</button>
                    </a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>