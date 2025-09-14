<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops</title>
    <style>
        body {
            font-family: sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        h1, h2, h3 {
            color: #333;
        }
        code {
            background-color: #f4f4f4;
            padding: 2px 4px;
            border-radius: 4px;
            font-family: monospace;
        }
        .example {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>PHP Loops</h1>

    <div class="example">
        <h2>The <code>for</code> Loop</h2>
        <p>The <code>for</code> loop is used when you know in advance how many times the script should run.</p>
        <?php
        echo "<p><code>for (\$i = 0; \$i <= 5; \$i++) { ... }</code></p>";
        for ($i = 0; $i <= 5; $i++) {
            echo "The number is: $i <br>";
        }
        ?>
    </div>

    <div class="example">
        <h2>The <code>while</code> Loop</h2>
        <p>The <code>while</code> loop loops through a block of code as long as the specified condition is true.</p>
        <?php
        echo "<p><code>\$i = 1; while (\$i <= 5) { ... }</code></p>";
        $i = 1;
        while ($i <= 5) {
            echo "The number is: $i <br>";
            $i++;
        }
        ?>
    </div>

    <div class="example">
        <h2>The <code>do-while</code> Loop</h2>
        <p>The <code>do-while</code> loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.</p>
        <?php
        echo "<p><code>\$i = 1; do { ... } while (\$i <= 5);</code></p>";
        $i = 1;
        do {
            echo "The number is: $i <br>";
            $i++;
        } while ($i <= 5);
        ?>
    </div>

    <div class="example">
        <h2>The <code>foreach</code> Loop</h2>
        <p>The <code>foreach</code> loop works only on arrays, and is used to loop through each key/value pair in an array.</p>
        <?php
        $colors = array("red", "green", "blue", "yellow");
        echo "<p><code>\$colors = array(\"red\", \"green\", \"blue\", \"yellow\");</code></p>";
        echo "<p><code>foreach (\$colors as \$value) { ... }</code></p>";
        foreach ($colors as $value) {
            echo "$value <br>";
        }
        ?>
    </div>

</body>
</html>