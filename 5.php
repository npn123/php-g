<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operators</title>
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
    <h1>PHP Comparative and Logical Operators</h1>

    <div class="example">
        <h2>Comparative Operators</h2>
        <p>These operators are used to compare two values.</p>
        <?php
        $x = 100;
        $y = "100";
        echo "<p><code>\$x = 100;</code><br><code>\$y = \"100\";</code></p>";

        echo "<h3>Equal (<code>==</code>)</h3>";
        echo "<p>Checks if the values of two operands are equal. <code>\$x == \$y</code> returns: </p>";
        var_dump($x == $y);

        echo "<h3>Identical (<code>===</code>)</h3>";
        echo "<p>Checks if two operands are equal and of the same data type. <code>\$x === \$y</code> returns: </p>";
        var_dump($x === $y);

        echo "<h3>Not equal (<code>!=</code> or <code>&lt;&gt;</code>)</h3>";
        echo "<p>Checks if the values of two operands are not equal. <code>\$x != \$y</code> returns: </p>";
        var_dump($x != $y);

        echo "<h3>Not identical (<code>!==</code>)</h3>";
        echo "<p>Checks if two operands are not equal or not of the same type. <code>\$x !== \$y</code> returns: </p>";
        var_dump($x !== $y);

        $a = 100;
        $b = 50;
        echo "<p><code>\$a = 100;</code><br><code>\$b = 50;</code></p>";

        echo "<h3>Greater than (<code>&gt;</code>)</h3>";
        echo "<p><code>\$a &gt; \$b</code> returns: </p>";
        var_dump($a > $b);

        echo "<h3>Less than (<code>&lt;</code>)</h3>";
        echo "<p><code>\$a &lt; \$b</code> returns: </p>";
        var_dump($a < $b);

        echo "<h3>Greater than or equal to (<code>&gt;=</code>)</h3>";
        echo "<p><code>\$a &gt;= \$b</code> returns: </p>";
        var_dump($a >= $b);

        echo "<h3>Less than or equal to (<code>&lt;=</code>)</h3>";
        echo "<p><code>\$a &lt;= \$b</code> returns: </p>";
        var_dump($a <= $b);
        
        echo "<h3>Spaceship (<code>&lt;=&gt;</code>)</h3>";
        echo "<p>Returns -1 if the left operand is less than the right, 0 if they are equal, and 1 if the left is greater.<code> 1 &lt;=&gt; 2 </code> returns: </p>";
        var_dump(1 <=> 2);
        echo "<p><code> 2 &lt;=&gt; 2 </code> returns: </p>";
        var_dump(2 <=> 2);
        echo "<p><code> 3 &lt;=&gt; 2 </code> returns: </p>";
        var_dump(3 <=> 2);
        ?>
    </div>

    <div class="example">
        <h2>Logical Operators</h2>
        <p>These operators are used to combine conditional statements.</p>
        <?php
        $p = true;
        $q = false;
        echo "<p><code>\$p = true;</code><br><code>\$q = false;</code></p>";

        echo "<h3>And (<code>and</code> or <code>&&</code>)</h3>";
        echo "<p>True if both operands are true. <code>\$p && \$q</code> returns: </p>";
        var_dump($p && $q);

        echo "<h3>Or (<code>or</code> or <code>||</code>)</h3>";
        echo "<p>True if either of the operands is true. <code>\$p || \$q</code> returns: </p>";
        var_dump($p || $q);

        echo "<h3>Xor (<code>xor</code>)</h3>";
        echo "<p>True if either operand is true, but not both. <code>\$p xor \$q</code> returns: </p>";
        var_dump($p xor $q);

        echo "<h3>Not (<code>!</code>)</h3>";
        echo "<p>True if the operand is false. <code>!\$p</code> returns: </p>";
        var_dump(!$p);
        ?>
    </div>
</body>
</html>
