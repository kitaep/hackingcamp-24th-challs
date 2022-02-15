<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple_php</title>
</head>
<body>
    <?php

    if (isset($_GET['source'])) {
        show_source(__FILE__);
    }

    if(isset($_GET['file'])) {
        include $_GET['file'];
    }

    ?>
    <a href="upload.php">upload</a><br>
    <a href="?source">source</a><br>
</body>
</html>