<!DOCTYPE html>
<html>
<head>
    <title>Date and Time</title>
</head>
<body>

<?php

// Set timezone (India)
date_default_timezone_set("Asia/Kolkata");

// Display current date
echo "Current Date: " . date("d-m-Y") . "<br>";

// Display current time
echo "Current Time: " . date("h:i:s A");

?>

</body>
</html>