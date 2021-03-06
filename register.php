<!DOCTYPE html>
<html>
    <head>
        <title>User registration</title>
        <link rel = "stylesheet" type="text/css" href="style/style.css">
    </head>

    <body>

        <div class="header">
            <h2>Register</h2>
        </div>

        <form method="post" action="register.php">
            <div class="input-group">
                <lable>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
            </div>

            <div class="input-group">
                <lable>Email</label>
                <input type="email" name="email" value="<?php echo $username; ?>">
            </div>

            <div class="input-group">
                <lable>Password</label>
                <input type="password" name="password">
            </div>

            <div class="input-group">
                <lable>Confirm Password</label>
                <input type="password" name="password2">
            </div>

            <div class="input-group">
                <button type="submit" name="register" class="btn">Register</button>
            </div>

            <p>
                Already a member? <a href="login.php">Sign in</a>
            </p>
        </form>

        <?php include('server.php'); ?>
        <!-- display errors if occur -->
        <?php include('errors.php');?>

    </body>
</html>
