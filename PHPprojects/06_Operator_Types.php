<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>PHP Operator Types</title>
</head>
<body>
    <h3>Arithmetical Oerators</h3>
    <?php
        $a = 42;
        $b = 20;
        
            $c = $a + $b;
        echo "Addition Operation Result: $c <br/>";
        $c = $a - $b;
        echo "Subtraction Operation Result: $c <br/>";
        $c = $a * $b;
        echo "Multiplication Operation Result: $c <br/>";
        $c = $a / $b;
        echo "Division Operation Result: $c <br/>";
        $c = $a % $b;
        echo "Modulus Operation Result: $c <br/>";
        $c = $a++;
        echo "Increment Operation Result: $c <br/>";
        $c = $a--;
        echo "Decrement Operation Result: $c <br/>";
    ?>
</body>
</html>