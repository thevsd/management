<?php

    session_start();
    //Connect to database
    include('db_connect.php');
    //errors array
    $errors = array('id' => '', 'name' => '', 'birth' => '', 'address' => '');

    //if the register button is pressed 
    if(isset($_POST['add'])) {
        $id = $_POST['customerID'];
        $name = $_POST['fullName'];
        $birth = $_POST['birthday'];
        $address = $_POST['address'];

        //ensure the form is filled properly
        if($id == "") {
            $errors['id'] = 'ID is required!';
        }

        if($name == "") {
            $errors['name'] = 'A name is required!';
        }

        if($birth == "") {
            $errors['birth'] = 'Birthday is required!';
        }

        if($address == "") {
            $errors['address'] = 'Address is required!';
        }

        //Save the user
        if(!array_filter($errors)) {
            $sql = "INSERT INTO customers (customerID, fullName, dateOfBirth, address) VALUES ('$id','$name', '$birth', '$address')";
            mysqli_query($db, $sql);
            include('success.php');
        }
    }
?>