<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series</title>
</head>
<body>

<?php

$n = 10;   // number of terms
$a = 0;
$b = 1;

echo "Fibonacci Series up to $n terms:<br>";

for($i = 1; $i <= $n; $i++)
{
    echo $a . " ";
    $c = $a + $b;
    $a = $b;
    $b = $c;
}

?>

</body>
</html>