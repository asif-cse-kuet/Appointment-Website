<?php
session_start();
include 'connection.php';

$pass = $_POST['password'];
$email = $_POST['email'];


// //SQL for checking email exist
$sqlemail = "SELECT email FROM user WHERE email = '{$email}';";
$passcheck = "SELECT pass FROM user WHERE email = '{$email}';";
$uname = "SELECT fname FROM user WHERE email = '{$email}';";

$emailcheck = mysqli_query($conn, $sqlemail);
$sqlid = mysqli_query($conn, $passcheck);
$sqluname = mysqli_query($conn, $uname);

if (isset($_POST['submit']))
{

    // Below code block is for checking the inputs
    if ($emailcheck->num_rows > 0){
        $result1 = mysqli_fetch_assoc($sqlid);
        $result2 = mysqli_fetch_assoc($sqluname);
        $uid = $result2['fname'];
        $idd = $result1['pass'];
        if ($idd==$pass)
        {
            $_SESSION['status'] = "success";
            $_SESSION['session_id'] = $uid;
            header("Location: ../appoinment.php");
        }
        else{
            $_SESSION['status'] = "failed";
            header("Location: ../index.php");
        }        
    }

    else{
        $_SESSION['status'] = "failed";
        header("Location: ../index.php");
    }
}

?>