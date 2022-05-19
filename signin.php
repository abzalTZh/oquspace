<?php require_once("includes/connection.php"); ?>

<?php
if(isset($_SESSION["session_username"])){
	// вывод "Session is set"; // в целях проверки
	header("Location: profile.php");
	}

// Функция для генерации случайной строки
function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}

// Соединямся с БД
$link=mysqli_connect("localhost", "root", "", "oqu_space");

if(isset($_POST['submit']))
{
    // Вытаскиваем из БД запись, у которой логин равняеться введенному
    $query = mysqli_query($link,"SELECT id, password FROM users WHERE username='".mysqli_real_escape_string($link,$_POST['username'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);

    // Сравниваем пароли
    if($data['password'] === md5(md5($_POST['password'])))
    {
        // Генерируем случайное число и шифруем его
        $hash = md5(generateCode(10));

        if(!empty($_POST['not_attach_ip']))
        {
            // Если пользователя выбрал привязку к IP
            // Переводим IP в строку
            $insip = ", user_ip=INET_ATON('".$_SERVER['REMOTE_ADDR']."')";
        }

        // Записываем в БД новый хеш авторизации и IP
        mysqli_query($link, "UPDATE users SET user_hash='".$hash."' ".$insip." WHERE id='".$data['user_id']."'");

        // Ставим куки
        setcookie("id", $data['id'], time()+60*60*24*30, "/");
        setcookie("hash", $hash, time()+60*60*24*30, "/", null, null, true); // httponly !!!

        // Переадресовываем браузер на страницу проверки нашего скрипта
        header("Location: profile.php"); exit();
    }
    else
    {
        print "Username or password is incorrect";
    }
}
?>

<html>
<head>
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="shortcut icon" href="img-s/oquspace.ico" type="image/x-icon" />
    <title>Sign In</title>
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
                <button type="submit" name="submit" id="login-btn" class="btttn">Log In</button>
            </a>
        </form>
</body>

</html>