<!DOCTYPE html>
<html>
    <head>
        <title>User login</title>
        <link rel = "stylesheet" type="text/css" href="registration.css">
    </head>

    <body>
        <div class="header">
            <h2>Login</h2>
        </div>

        <form method="POST" action="login.php">
            <div class="input-group">
                <lable>Username</label>
                <input type="text" name="username">
            </div>

            <div class="input-group">
                <lable>Password</label>
                <input type="password" name="password">
            </div>

            <div class="input-group">
                <button type="submit" name="login" class="btn">Login</button>
            </div>

            <p>
                Not a member yet? <a href="register.php">Sign up</a>
            </p>
        </form>
    </body>
</html>
