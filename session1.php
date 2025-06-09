<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $user = $_POST['txtuser'];
    $pass = $_POST['txtpass'];

    echo $user;
    echo $pass;

    session_start();
    $_SESSION['username'] = $user;
    $_SESSION['password'] = $pass;
    ?>



</body>

</html>