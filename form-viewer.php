<?php
$data = $_REQUEST;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    table { border-collapse: collapse; width: 100%; margin-top: 20px; background: white; }
    th, td { border: 1px solid #333; padding: 10px; }
    th { background: #ddd; }
  </style>
    <title>Form Data Viewer</title>
</head>
<body>
    <h1>Submission Results</h1>
    <table>
        <caption>Submitted Data</caption>
        <tr>
            <th>Choice</th>
            <th>Response</th>
        </tr>
        <?php foreach ($data as $key => $value): ?>
            <tr>
                <td><?= htmlspecialchars($choice)?></td>
                <td>
                    <?php if (is_array($response)): ?>
                        <ul
                            <?php foreach ($response as $item): ?>
                                <li><?= htmlspecialchars($item) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <?= htmlspecialchars($response) ?>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    
</body>
</html>
