<?php
    $db = mysqli_connect("us-cdbr-iron-east-01.cleardb.net", "b3b904e2b6a5bd", "c89c04f9", "heroku_5abb989acb9536e");
    if($db-> connect_error) {
        die("Connection failed:". $conn-> connect_error);
    }
?>