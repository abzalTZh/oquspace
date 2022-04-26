<html>

<head>
    <link rel="stylesheet" href="../css/signup.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/signup.js"></script>

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
        <form id="form" action="main.html">
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
                <input type="text" name="login" id="login" onchange="Log()" />
                <br/>
                <label>Username:</label>
                <img src="https://cdn.icon-icons.com/icons2/894/PNG/128/Tick_Mark_icon-icons.com_69146.png" id="true" height="15px" class="b" />
            </div>
            <br>
            <div class="user-box">
                <input type="password" name="password" id="pass1" onchange="Pass()" />
                <label>Password:</label>
                <img src="https://cdn.icon-icons.com/icons2/894/PNG/128/Tick_Mark_icon-icons.com_69146.png" id="true1" height="15px" class="b" />
            </div>
            <a href="profile.html">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <button type="submit" name="submit" id="login-btn" class="btttn">Sign Up</button>
            </a>

            <div id="signup-forms">
                <br />
                <label id="password1">at least one uppercase</label>
                <br />
                <label id="password2">at least one sign</label>
                <br />
                <label id="password3">at least one number</label>
                <br />
            </div>
        </form>
</body>

</html>