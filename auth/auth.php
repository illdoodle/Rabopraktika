<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - SS14 Auth</title>
    <script src="auth.js"></script>
    <link rel="stylesheet" href="auth-style.css">
    <link rel="shortcut icon" href="../images/icon.png">
</head>
<body>
    <div class="header">
        <div class="header-line">
            <div class="header-logo">
                <img src="../images/reglogo.svg" alt="reglogo">
            </div>
            <div class="main-link">
                <a href="https://spacestation14.io/">Main Website</a>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="auth-window">
            <div class="description">
                <h1>Log In</h1>
                <h2>Use your Space Station 14 <br> account to log in.</h2>
            </div>
            <div class="login">
                <form method="post" id="authForm">
                    <div class="login-input">
                        <p>Email Or Username</p>
                        <input type="text" class="input-text" id="username" name="username" required>
                    </div>
                    <div class="pw-input">
                        <p>Password</p>
                        <input type="password" class="input-text" id="password" name="password" required> 
                    </div>
                    <div class="confirm">
                        <!-- formaction -->
                        <input style="cursor: pointer;" type="submit" value="Log In" onclick="setAction('login')">
                        <input style="cursor: pointer;" type="submit" value="Register" onclick="setAction('registration')">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="footer-line">
            <div class="footer-line-text">
                <div class="footer-dev-text">
                    <span>© 2023 - Space Wizards Federation - </span>
                </div>
                &nbsp;
                <div class="footer-lniks">
                    <a href=""> Privacy</a>
                    <span> - </span>
                    <a href="">Contact</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
