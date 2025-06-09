<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $user = $_COOKIE['username'];
    $pass = $_COOKIE['password'];
    echo "Welcome to page 3 username" . $user;
    echo "Welcome to page 3 password" . $pass;
    ?>
</body>

</html>