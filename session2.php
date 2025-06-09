<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
session_start();

echo  "welcome to page three of session" . $_SESSION['username'];
echo  " <br> welcome to page three of session" . $_SESSION['password'];

?>

<body>

</body>

</html>