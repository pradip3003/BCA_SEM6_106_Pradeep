<!DOCTYPE html>
<html>
<head>
    <title>Array Example</title>
</head>
<body>

<?php

// Student array
$student = array(
    "name" => "Ram",
    "roll_no" => 101
);

// Employee array
$employee = array(
    "name" => "Rahul",
    "employee_id" => 5001
);

// Product array
$product = array(
    "name" => "Laptop",
    "price" => 55000
);

// Display information
echo "Student Information:<br>";
echo "Name: " . $student["name"] . "<br>";
echo "Roll Number: " . $student["roll_no"] . "<br><br>";

echo "Employee Information:<br>";
echo "Name: " . $employee["name"] . "<br>";
echo "Employee ID: " . $employee["employee_id"] . "<br><br>";

echo "Product Information:<br>";
echo "Product Name: " . $product["name"] . "<br>";
echo "Price: " . $product["price"];

?>

</body>
</html>