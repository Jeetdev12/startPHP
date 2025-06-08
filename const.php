<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    define("Greeting", "Welcome to my program !!");
    function test()
    {
        echo Greeting;
    }
    test();
    $a = 20;
    $b = 30;
    $c = $a * $b;

    echo "Area of Rectangle :" . $c;
    ?>
</body>

</html>