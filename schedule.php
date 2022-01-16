<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="schedule.css">
</head>
<body>
    <div class="schedule">
        <h1>Schedule A Meeting</h1>
        <form action="schedule.php" method="post">
            <label for="fname">First Name</label>
            <input type="text" name="fname"/><br/>
        
            <label for="email">Your Email</label>
            <input type="email" name="email"/><br/>
            
            <label for="date">Select Date</label>
            <input type="date" data-date-inline-picker="true" /><br>
            
            <label for="fname">Time</label>
            <input type="time" name="time"/><br/>

            <label for="fname">Invited Persons' Email</label>
            <input type="email" name="email2"/><br/>

            <input type="button" value="Submit"/><br>
        </form>
    </div>
</body>
</html>