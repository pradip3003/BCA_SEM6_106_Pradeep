<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>
<body>

<?php

$a = 20;
$b = 10;
$operation = "+";   // Change operation: +, -, *, /

echo "First Number: $a <br>";
echo "Second Number: $b <br>";
echo "Operation: $operation <br><br>";

switch($operation)
{
    case "+":
        $result = $a + $b;
        echo "Addition Result = $result";
        break;

    case "-":
        $result = $a - $b;
        echo "Subtraction Result = $result";
        break;

    case "*":
        $result = $a * $b;
        echo "Multiplication Result = $result";
        break;

    case "/":
        $result = $a / $b;
        echo "Division Result = $result";
        break;

    default:
        echo "Invalid Operation";
}

?>

</body>
</html>