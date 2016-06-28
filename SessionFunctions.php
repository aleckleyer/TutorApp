<?php 
    session_start();
    include 'dbconnect.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

function userSession() {
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
}

function locationSession() {
    $userId=$_SESSION['valid_user_id'];
    $sql="SELECT * FROM location WHERE userId='$userId'";

    $results=$conn->query($sql);
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
             if(($row["userId"] == $userId)){
                $_SESSION['valid_user_location']=$row["location"];
                $_SESSION['valid_user_locationId']=$row["locationId"];
             }//end if
        }//end while
    }//end if
    $conn->close();
}//end class

function subject() {
    $userId=$_SESSION['valid_user_id'];
    $sql="SELECT * FROM subject WHERE userId='$userId'";

    $results=$conn->query($sql);
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
             if(($row["userId"] == $userId)){
                $_SESSION['valid_user_subject']=$row["subject"];
                $_SESSION['valid_user_subjectId']=$row["subjectId"];
             }//end if
        }//end while
    }//end if
    $conn->close();
}

function messages(){
    $userId=$_SESSION['valid_user_id'];
    $sql="SELECT * FROM messages WHERE userId='$userId'";

    $results=$conn->query($sql);
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
             if(($row["userId"] == $userId)){
                $_SESSION['valid_user_Message']=$row["Message"];
                $_SESSION['valid_user_MessageID']=$row["MessageID"];
                $_SESSION['valid_user_UserID_R']=$row["UserID_R"];
             }//end if
        }//end while
    }//end if
    $conn->close();
}

// this needs to be updated to not copy messages
function coursenum() {
    $userId=$_SESSION['valid_user_id'];
    $sql="SELECT * FROM messages WHERE userId='$userId'";

    $results=$conn->query($sql);
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
             if(($row["userId"] == $userId)){
                $_SESSION['valid_user_Message']=$row["Message"];
                $_SESSION['valid_user_MessageID']=$row["MessageID"];
                $_SESSION['valid_user_UserID_R']=$row["UserID_R"];
             }//end if
        }//end while
    }//end if
    $conn->close();
}



?>