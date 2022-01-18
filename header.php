
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="style/navstyle.css">
</head>

<body>
    <div class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="schedule.php">Schedule</a></li>
            <li><a href="appoinment.php">Appoinment</a></li>
            <li><a href="About us.php">About Us</a></li>
            <li style="float:right; color:wheat; margin-right:20px;"> <?php if (isset($_SESSION['session_id'])) { echo $_SESSION['session_id'];} ?> </li>
            <li id ="u" style="float:right; color:wheat; margin-right:20px;"><a href="connection/session_destroy.php">Log out</a></li>
            <?php if (!isset($_SESSION['session_id'])) {
                echo '<script type="text/JavaScript"> 
                document.getElementById("u").style.display = "none";
                    </script>'; };
            ?>
            
        </ul>
    </div>


</body>

</html>