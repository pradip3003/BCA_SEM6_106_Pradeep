<!DOCTYPE html>
<html>
<head>
    <title>Swap Two Numbers</title>
</head>
<body>

<?php

$a = 10;
$b = 20;

echo "Before Swapping:<br>";
echo "a = $a <br>";
echo "b = $b <br>";

// Swapping without third variable
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "<br>After Swapping:<br>";
echo "a = $a <br>";
echo "b = $b <br>";

?>

</body>
</html>