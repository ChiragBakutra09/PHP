<!DOCTYPE html>
<html>
<head>
    <title>PROGRAM-2</title>
</head>
<body>

<h2>Enter Two Numbers:</h2>

<form method="post" action="">
    Number 1: <input type="text" name="num1" required><br><br>
    Number 2: <input type="text" name="num2" required><br><br>
    <input type="submit" value="Find Max & Min">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if (is_numeric($num1) && is_numeric($num2)) {
        if ($num1 > $num2) {
            $max = $num1;
            $min = $num2;
        } else {
            $max = $num2;
            $min = $num1;
        }

        echo "<h3>Results:</h3>";
        echo "Maximum number is: " . $max . "<br>";
        echo "Minimum number is: " . $min;
    } else {
        echo "Please enter valid numbers!";
    }
}
?>

</body>
</html>
