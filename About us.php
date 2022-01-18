<?php
    session_start();
    include_once 'connection/connection.php';
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <!-- <?php
        include 'footer.php';
        ?> -->

        <script>
            var upload = document.getElementById[upload];
            move_uploaded_file($_FILES['img']['temp_name'],'images/'.$_FILES['img']['name']);
        </script>
</body>
</html>