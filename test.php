<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Months and Days Table</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Updated Months and Number of Days</h2>
<table>
    <thead>
        <tr>
            <th>Month</th>
            <th>Number of Days</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Remove months starting with 'B'
        foreach ($months as $month => $days) {
            if (strpos($month, 'B') === 0) {
                unset($months[$month]);
            }
        }

        // Display the updated table
        foreach ($months as $month => $days) {
            echo "<tr><td>$month</td><td>$days</td></tr>";
        }



        ?>
    </tbody>
</table>

<h2>Sorted by Number of Days</h2>
<?php
// Sort the array by the number of days
asort($months);
?>
<table>
    <thead>
        <tr>
            <th>Month</th>
            <th>Number of Days</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($months as $month => $days) {
            echo "<tr><td>$month</td><td>$days</td></tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
