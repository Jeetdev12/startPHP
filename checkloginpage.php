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
    // echo $user;
    // echo $pass;
    if ((strcmp($user, "manjeet") == 0) and (strcasecmp($pass, "indor") == 0))
        // echo "<font color=green size=10> User valid <font/>  ";
        header("Location: datatypes.php");
    else echo "<font color=red size=10>User invalid </font>"

    ?>
</body>

</html>