<?php
session_start();
include 'dbconnect.php';

if(isset($_POST['submit'])){
    $sender = $_SESSION['valid_user_id'];
    $rec = $_POST['sendTo'];
    $message = $_POST['messageTo'];
    
    $sql_u = "SELECT userId FROM users WHERE concat(FirstName, ' ', LastName)='$rec'";
    $result=$conn->query($sql_u);
    
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $rec_u = $row['userId'];
        }
    }

    $sql = "INSERT INTO messages (Message,UserID,UserID_R) VALUES ('$message', '$rec_u', '$sender')";

    if ($conn->query($sql) === TRUE){
        $_SESSION['message_sent'] = 1;
    } else{
        $_SESSION['message_sent'] = -1;
    }
    header('Location:messages.php');
}
?>