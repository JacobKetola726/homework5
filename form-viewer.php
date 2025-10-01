<?php
$data = $_REQUEST;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Viewer</title>
    <style>
    table { border-collapse: collapse; width: 100%; margin-top: 20px; background: white; }
    th, td { border: 1px solid #333; padding: 10px; }
    th { background: #ddd; }
  </style>
</head>
<body>
    <h1>Submission Results</h1>
    <table>
        <caption>Submitted Data</caption>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <?php
        foreach ($data as $key => $value) {
            echo "<tr><td>" . htmlspecialchars($key) . "<tr><td>";
            if (is_array($value)) {
                echo "<ul>";
                foreach ($value as $v) {
                    echo "<li>" . htmlspecialchars($v) . "</li>";
                }
                echo "<ul>";
            } else {
                echo htmlspecialchars($value);
            }
            echo "<td><tr>";
        }
        ?>
    </table>

    
</body>
</html>
