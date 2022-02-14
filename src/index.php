<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eval_php</title>
</head>
<body>
    <?php
    //error_reporting(E_ALL);

    if (isset($_GET['source'])) {
        show_source(__FILE__);
    }

    if(isset($_GET['eval'])) {
        $cmd = $_GET['eval'];
        if (strlen($cmd) > 50) {
            die("too long");
        }
        eval($cmd);
    }

    ?>
    <a href="functions.php">allowed functions</a><br>
    <a href="?source">source</a><br>
</body>
</html>