<?php
    //Connect to database
    include('db_connect.php');
    //errors array
    $errors = array('user' => '', 'email' => '', 'password' => '', 'password2' => '');

    //if the register button is pressed 
    if(isset($_POST['register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        //ensure the form is filled properly
        if($username == "") {
            $errors['user'] = 'Username is required!';
        }

        if($email == "") {
            $errors['email'] = 'Email is required!';
        }

        if($password == "") {
            $errors['password'] = 'Password is required!';
        }

        if($password != $password2) {
            $errors['password2'] = 'Password does not match!';
        }

        //Save the user
        if(!array_filter($errors)) {
            $sql = "INSERT INTO phpusers (username, password, email) VALUES ('$username','$password', '$email')";
            mysqli_query($db, $sql);
            include('regis_success.php');
        }
    }

?>