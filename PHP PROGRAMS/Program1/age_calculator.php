<!DOCTYPE html>
<html>
<head>
    <title>Age Calculator</title>
</head>
<body>

<?php

// Date of Birth
$dob = "2003-05-10";

// Current date
$today = date("Y-m-d");

// Convert to DateTime objects
$birthDate = new DateTime($dob);
$currentDate = new DateTime($today);

// Calculate difference
$age = $birthDate->diff($currentDate);

echo "Date of Birth: " . $dob . "<br>";
echo "Current Date: " . $today . "<br>";
echo "Age: " . $age->y . " years";

?>

</body>
</html>