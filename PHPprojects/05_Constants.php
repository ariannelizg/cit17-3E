<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>PHP Constants</title>
</head>
<body>
    <h3>Constants</h3>
    <?php
        define("MINISIZE", 50);

        echo MINISIZE;
        echo constant("MINISIZE");

        // Valid constant names
        define("ONE", "first thing");
        define("TWO2", "second thing");
        define("THREE_3", "third thing")
        // Invalid constant names
        //define("2TWO", "second thing");
        //define("__THREE__", "third value"); 
    ?>
</body>
</html>