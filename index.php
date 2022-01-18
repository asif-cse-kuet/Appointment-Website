<?php
    session_start();
    include 'connection/connection.php';
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
    
    <!-- javascrpit is required to validate the regiter form field -->
    <script defer src="connection/validate.js"></script>

</head>
<body>


    <div class="both">

        <!-- LOGIN FORM -->
        <div class="login">
            <h1>Login Info</h1>

            <!-- Login info validation message -->
            <div id="abc" style="text-align:center; font-family: Arial, Helvetica, sans-serif; color:red; font-size:10px;">
            <?php
                if (isset($_SESSION['status'])){
                    if ($_SESSION['status']=="failed")
                    {
                        echo "Incorrect email & password combination";
                        session_unset();
                    }
            }

            ?>
            </div>

            <form action="connection/login.input.php" method="post" enctype="multipart/form">
               <p> Email ID:</p>
                <input type="email" name="email" placeholder="Enter your email Id" required/><br>
                <p> PASSWORD :</p>
                <input type="password" name = "password"placeholder="Enter your Password" required/><br>
                <button type="submit" name="submit" >Submit</button>
            </form>

        </div>


        <!-- REGISTER FORM -->
        <div class="register">
            <h1>Register</h1>

            <!-- EMAIL DATABASE VALIDATION -->
            <div id="abc" style="text-align:center; font-family: Arial, Helvetica, sans-serif; color:red; font-size:10px;">
            <?php
                if (isset($_SESSION['status'])){
                    if ($_SESSION['status']=="exist")
                    {
                        echo "This email already exist. Login instead. Or register with other email.";
                        // session_unset();
                    
                    }
            }

            ?>
            </div>

            <form id="register" name="register" action="connection/register.input.php" on_submit="connection/validate.js" method="post" enctype="multipart/form">
               <p> First Name </p>
                <input type="text" name = "fname" placeholder="Enter your First Name" required/><br>
                <p> Last Name </p>
                <input type="text" name = "lname" placeholder="Enter your Last Name" required/><br>
                <p>Email </p>
                <input id="email" name="email" type="email" placeholder="Enter your email id" required/><br>
                <p>Enter a password</p>

                <!-- Below Div is for Password Validatin Message purpose -->
                <div id="error" style="text-align:center; font-family: Arial, Helvetica, sans-serif; color:red; font-size:10px;"></div>
                
                <input id="password" name = "password" type="password" placeholder="Enter your password" required/><br>
                
                <p>Confirm Password </p>

                <!-- Below Div is for Password Validatin Message purpose -->
                <div id="error2" style="text-align:center; font-family: Arial, Helvetica, sans-serif; color:red; font-size:10px;"></div>

                <input id="conpassword" name = "conpassword" type="password" placeholder="Confirm your password" required/><br>
                <button type="submit" name="submit"> Submit </button>
            </form>

        </div>

    </div>
</body>
</html>