<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "quiziz";

    $db = mysqli_connect($server, $username, $password, $database);

    if(!$db){
        die("Connection failed: " . mysqli_connect_error());
    }
?>