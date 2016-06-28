<?php 
    session_start();
    include 'dbconnect.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql="SELECT * FROM users
            WHERE email='$email'
            AND password='$password'";

    $result=$conn->query($sql);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if(($row["email"] == $email)&&($row["password"]) == $password){
                $_SESSION['valid_user_email']=$row["email"];
                $_SESSION['valid_user_pass']=$row["password"];
                $_SESSION['valid_user_uni']=$row["university"];
                $_SESSION['valid_user_fname']=$row["FirstName"];
                $_SESSION['valid_user_lname']=$row["LastName"];
                $_SESSION['valid_user_id']=$row["userId"];
                header('Location:userprofile.php');
            } else {
                header('Location:index.php');
            }
        }
    } else {
        echo "0 results";
    }


    $conn->close();

?>