<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel = "stylesheet" type="text/css" href="style/style.css">
    </head>

    <body>
        <div class="header">
            <h2>Log In</h2>
        </div>

        <form method="post" action="login.php">
            <div class="input-group">
                <lable>Username or Email</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
            </div>

            <div class="input-group">
                <lable>Password</label>
                <input type="password" name="password">
            </div>

            <div class="input-group">
                <button type="submit" name="login" class="btn">Login</button>
            </div>

            <p>
                Not a member? <a href="register.php">Sign up</a>
            </p>
        </form>

        <?php include('server.php'); ?>
        <!-- display errors if occur -->
        <?php include('errors.php');?>

    </body>
</html>
