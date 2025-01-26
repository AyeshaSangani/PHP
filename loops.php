<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOOPS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <h1><u>Control Structure:</u></h1>

    <h3>LOOPS</h3>

    <h4>for loop</h4>

    <?php

//    for loop

    for ($i = 0; $i < 10; $i++) {

        echo "<br>";
        echo "this is for loop"  . " " . $i;

    }
    ;

    ?>




    <h4>while loop</h4>

    <?php


//   while loop 
    $k = 0;
    while ($k < 10) {
        $k++;
        echo "<br>";
        echo "this is while loop" . " " . $k;

    }
    ;

    ?>



    <h4>Do while loop</h4>
    <!-- do while loop -->

    <?php

    $j = 1; {
        $j++;
        echo "<br>";
        echo "this is Do while loop" . " " . $j;

    }
    while ($j < 30)

    ?>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>