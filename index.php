<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Page</title>
        <link rel="stylesheet" href="src/css/login-style.css">
        </head>
    <body>
        <div class="box">
            <span class="borderLine"></span>
            <form action="code.php" method="POST">
                <h2>Sign in</h2>
                <div class="inputbox">
                    <input type="email" name="email" class="form-control" id="Email1" required="required">
                    <span>Your Email</span>
                    <i></i>                    
                </div>
                <div class="inputbox">
                    <input type="password" name="password" class="form-control" id="Password" required>
                    <span>Password</span>
                    <i></i>
                </div>
                <div class="links">
                    <a href="#">Forget Password</a>
                    <a href="#">Signup</a>
                </div>
                <input type="submit" name="login_btn" value="Login">
            </form>
        </div>


    </body>
</html>

