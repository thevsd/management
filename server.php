<?php

    session_start();
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
    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        //ensure the form is filled properly
        if($username == "") {
            $errors['user'] = 'Username is required!';
        }

        if($password == "") {
            $errors['password'] = 'Password is required!';
        }

        if (!array_filter($errors)){
            $query = "SELECT * FROM phpusers WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($db, $query);

            if (mysqli_num_rows($result)){
                header("location:customer.php");
            }
            else{
                $errors['user'] = "Sorry, try again!!!";
            }
        }
    }

?>