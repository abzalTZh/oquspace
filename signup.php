<?php
// Страница регистрации нового пользователя

// Соединямся с БД
$link=mysqli_connect("localhost", "root", "", "oqu_space");

if(isset($_POST['submit']))
{
    $err = [];

    // проверям логин
    if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['username']))
    {
        $err[] = "Username must consist of english letters and numbers only";
    }

    if(strlen($_POST['username']) < 3 or strlen($_POST['username']) > 30)
    {
        $err[] = "Username must be at least 4 characters and no longer than 30 characters long";
    }

    // проверяем, не сущестует ли пользователя с таким именем
    $query = mysqli_query($link, "SELECT id FROM users WHERE username='".mysqli_real_escape_string($link, $_POST['username'])."'");
    if(mysqli_num_rows($query) > 0)
    {
        $err[] = "Username is already taken";
    }

    $query = mysqli_query($link, "SELECT id FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."'");
    if(mysqli_num_rows($query) > 0)
    {
        $err[] = "Email is already taken";
    }

    // Если нет ошибок, то добавляем в БД нового пользователя
    if(count($err) == 0)
    {
        $fullname = $_POST['full-name'];
        $email = $_POST['email'];
        $login = $_POST['username'];

        // Убераем лишние пробелы и делаем двойное хеширование
        $password = md5(md5(trim($_POST['password'])));

        mysqli_query($link,"INSERT INTO users SET full_name='".$fullname."', username='".$login."', password='".$password."', email='".$email."'");
        header("Location: profile.php"); exit();
    }
    else
    {
        print "<b>Following errors have occured while signing up:</b><br>";
        foreach($err AS $error)
        {
            print $error."<br>";
        }
    }
}
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
        <form id="form" method="POST">
            <div id="signup-forms">
                <div class="user-box">
                    <input type="text" name="full-name" id="full-name">
                    <br>
                    <label>Full Name</label>
                </div>

                <div class="user-box">
                    <input type="text" name="email" id="email">
                    <br>
                    <label>Email</label>
                </div>
            </div>
            <div class="user-box">
                <input type="text" name="username" id="username">
                <br/>
                <label>Username:</label>
            </div>
            <br>
            <div class="user-box">
                <input type="password" name="password" id="pass1">
                <label>Password:</label>
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