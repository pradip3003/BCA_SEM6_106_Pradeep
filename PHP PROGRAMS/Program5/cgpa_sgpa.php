<!DOCTYPE html>
<html>
<head>
    <title>Percentage to CGPA and SGPA</title>
</head>
<body>

<?php

$percentage = 82;

// Conversion formula
$cgpa = $percentage / 9.5;
$sgpa = $percentage / 10;

echo "Percentage: " . $percentage . "% <br>";
echo "CGPA: " . round($cgpa,2) . "<br>";
echo "SGPA: " . round($sgpa,2);

?>

</body>
</html>