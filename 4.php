<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-Else Example</title>
</head>
<body>
    <h2>If-Else Condition Example</h2>
    <?php
    $hour = date("H");

    if ($hour < "12") {
        echo "Good morning!";
    } else {
        echo "Good day!";
    }
    ?>
</body>
</html>