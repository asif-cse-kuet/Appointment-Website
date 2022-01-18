<?php
session_start();
include 'connection.php';

$pass = $_POST['password'];
$email = $_POST['email'];


// //SQL for checking email exist
$sqlemail = "SELECT email FROM user WHERE email = '{$email}';";
$id = "SELECT fname FROM user WHERE email = '{$email}';";

$emailcheck = mysqli_query($conn, $sqlemail);

if (isset($_POST['submit']))
{

    // Below code block is for checking the inputs
    if ($emailcheck->num_rows > 0){
        
        $_SESSION['status'] = "success";
        header("Location: ../appoinment.php");    
    }

    else{
        $_SESSION['status'] = "failed";
        header("Location: ../index.php");
    }
}

?>