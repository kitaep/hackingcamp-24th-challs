<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple_php</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

<?php
    if (isset($_POST["submit"])) {
        $upload_dir = '/var/www/html/uploads/';
        $filename = md5(random_bytes(30));
        $upload_file = $upload_dir . $filename;

        if ($_FILES['file']['size'] > 500000) {
            die('file is too large. only <500kb is allowed');
        }

        if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
            echo 'upload success <a href="/uploads/' . $filename . '">file</a>';
        } else {
            echo 'upload failed';
        }
    }