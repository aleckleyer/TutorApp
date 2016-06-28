<?php

session_start();
include 'dbconnect.php';
    
if(isset($_POST['submit'])){
    $first = $_POST['firstName'];
    $last= $_POST['lastName'];
    $university = $_POST['university'];
    $email = $_POST['email'];
    $password = $_POST['password'];



    $sql = "INSERT INTO users (FirstName,LastName,email,password,university) VALUES ('$first', '$last', '$email', '$password', '$university')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['valid_user_email']=$row["email"];
        $_SESSION['valid_user_pass']=$row["password"];
        $_SESSION['valid_user_uni']=$row["university"];
        $_SESSION['valid_user_fname']=$row["FirstName"];
        $_SESSION['valid_user_lname']=$row["LastName"];
        $_SESSION['valid_user_id']=$row["userId"];
        header('Location:userprofile.php');
    } else {
        echo "Error: " . $sql . "<br/>" . $conn->error;
    }
}
$conn->close();

?>