<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>

<?php

$num = 5;

echo "Multiplication Table of $num <br><br>";

for($i = 1; $i <= 10; $i++)
{
    $result = $num * $i;
    echo "$num x $i = $result <br>";
}

?>

</body>
</html>