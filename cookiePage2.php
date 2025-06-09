<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanpur</title>
</head>

<body>
    <?php
    $user = $_POST['txtuser'];
    $pass = $_POST['txtpass'];

    echo $user;
    echo $pass;

    $ckuser = "username";
    $ckvalue = $user;

    $ckpass = "password";
    $ckpassvalue = $pass;

    setcookie($ckuser, $ckvalue);
    setcookie($ckpass, $ckpassvalue);
    ?>
    <form method="post" action="cookiespage3.php"><input type="submit" value="submit"></form>

</body>

</html>