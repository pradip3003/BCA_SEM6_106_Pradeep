<!DOCTYPE html>
<html>
<head>
    <title>Leap Year Program</title>
</head>
<body>

<?php

$year = 2024;

if(($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0))
{
    echo "$year is a Leap Year";
}
else
{
    echo "$year is Not a Leap Year";
}

?>

</body>
</html>