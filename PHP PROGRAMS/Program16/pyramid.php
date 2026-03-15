<!DOCTYPE html>
<html>
<head>
    <title>Pyramid Pattern</title>
</head>
<body>

<?php

$rows = 5;

for($i = 1; $i <= $rows; $i++)
{
    // Print spaces
    for($j = $i; $j < $rows; $j++)
    {
        echo "&nbsp;&nbsp;";
    }

    // Print stars
    for($k = 1; $k <= (2 * $i - 1); $k++)
    {
        echo "*";
    }

    echo "<br>";
}

?>

</body>
</html>