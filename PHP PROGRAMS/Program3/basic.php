<!DOCTYPE html>
<html>
<head>
    <title>Basic PHP Syntax</title>
</head>
<body>

<h2>PHP Basic Tags and Syntax Example</h2>

<?php

$name = "Ram";
$age = 21;

echo "Hello, my name is " . $name . "<br>";
echo "My age is " . $age . "<br>";

$a = 10;
$b = 5;
$sum = $a + $b;

echo "Sum of $a and $b is: $sum <br>";

if($age >= 18){
    echo "You are eligible to vote.";
} else {
    echo "You are not eligible to vote.";
}
?>

</body>
</html>