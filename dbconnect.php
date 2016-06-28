<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'tutorapp';

    $conn = new mysqli($host, $user, $pass, $db) or die("Unable to connect");


    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

?>