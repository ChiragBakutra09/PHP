<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PROGRAM-1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            color: #333;
        }
    </style>
</head>
<body>

<?php
    $ds = 80;
    $os = 80;
    $php = 80;

    $total_marks = $ds + $os + $php;
    $max_total = 300; // Assuming each subject is out of 100
    $percentage = ($total_marks / $max_total) * 100;
?>

<table>
    <tr>
        <th>
        Name : Chiag Bakutra
        </th>
    </tr>

    <tr>
        <th>Subject</th>
        <th>Marks</th>
    </tr>
    <tr>
        <td>DS</td>
        <td><?php echo $ds; ?></td>
    </tr>
    <tr>
        <td>OS</td>
        <td><?php echo $os; ?></td>
    </tr>
    <tr>
        <td>PHP</td>
        <td><?php echo $php; ?></td>
    </tr>
    <tr>
        <td>Total</td>
        <td><?php echo $total_marks; ?></td>
    </tr>
    <tr>
        <td>Percentage</td>
        <td><?php echo number_format($percentage, 2) . '%'; ?></td>
    </tr>
</table>
</body>
</html>
