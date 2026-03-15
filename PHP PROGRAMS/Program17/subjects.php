<!DOCTYPE html>
<html>
<head>
    <title>BCA Semester VI Subjects</title>
</head>
<body>

<?php

$subjects = array(
    "Web Programming using PHP",
    "Data Visualization",
    "Cyber Security",
    "Software Testing",
    "Project Work"
);

// Display subjects
echo "BCA Semester VI Subjects:<br>";

for($i = 0; $i < count($subjects); $i++)
{
    echo $subjects[$i] . "<br>";
}

?>

</body>
</html>