<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="style/register.css">

</head>
<body>


    <div class="both">
        <div class="login">
            <h1>Login Info</h1>
            <form action="#" method="post" enctype="multipart/form">
               <p> User ID:</p>
                <input type="text" placeholder="Enter your use Id"/><br>
                <p> PASSWORD :</p>
                <input type="password" placeholder="Enter your Password"/><br>
                <button type="submit">Submit</button>
            </form>

        </div>

        <div class="register">
            <h1>Register</h1>
            <form action="#" method="post" enctype="multipart/form">
               <p> First Name </p>
                <input type="text" placeholder="Enter your First Name"/><br>
                <p> Last Name </p>
                <input type="text" placeholder="Enter your Last Name"/><br>
                <p>Email </p>
                <input type="email" placeholder="Enter your email id"/><br>
                <p>Enter a password</p>
                <input type="password" placeholder="Enter your password"/><br>
                <p>Confirm Password </p>
                <input type="password" placeholder="Confirm your password"/><br>
                <button type="submit">Submit</button>
            </form>

        </div>

    </div>
</body>
</html>