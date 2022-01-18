<?php
session_start();
include 'connection.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$pass = $_POST['password'];
$email = $_POST['email'];

// SQL for insertion
$sqlinsert = "INSERT INTO user(email,fname,lname,pass) VALUES ('$email', '$fname', '$lname', '$pass');";


// //SQL for checking email exist
$sqlemail = "SELECT email FROM user WHERE email = '{$email}';";

$emailcheck = mysqli_query($conn, $sqlemail);

if (isset($_POST['submit']))
{

    // Below code block is for checking the inputs
    


    if ($emailcheck->num_rows > 0){
        $_SESSION['status'] = "exist";
        header("Location: ../index.php");
    }

    else{
        $_SESSION['status'] = "success";
        $_SESSION['session_id'] = $fname;
        mysqli_query($conn, $sqlinsert);
        header("Location: ../appoinment.php");
    }
}

?>