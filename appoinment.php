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
    <title>Document</title>
    <link rel="stylesheet" href="appointment.css">
</head>
<body>
    <div class="setappointment">
        <h1>Appoinment Details</h1>
        <table border="2" cellspacing="5" cellpadding="10" width="90%">
        <tr style="font: size 15px;background-color: burlywood;">
                <th style="width:25%">Person 1</th>
                <th style="width:25%">Person 2</th>
                <th style="width:25%">Date</th>
                <th style="width:25%">Time</th>
            </tr>

            <tr style="font: size 15px; text-align: center">
                <td style="width:25%">Abir</td>
                <td style="width:25%">Jamal</td>
                <td style="width:25%">December 20</td>
                <td style="width:25%">1.30AM</td>
            </tr>
        </table>
    </div>
</body>
</html>