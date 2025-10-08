<!DOCTYPE html>
<html>
<head>
    <title>PROGRAM-5</title>
</head>
<body>

<h3>Using for loop:</h3>
<?php
for ($i = 5; $i <= 10; $i++) {
    echo $i . "<br>";
}
?>

<h3>Using foreach loop:</h3>
<?php
$numbers = range(5, 10);
foreach ($numbers as $num) {
    echo $num . "<br>";
}
?>

</body>
</html>
