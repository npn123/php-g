<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays</title>
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
    <h1>PHP Arrays</h1>

    <div class="example">
        <h2>Indexed Arrays</h2>
        <p>Arrays with a numeric index.</p>
        <?php
        $cars = array("Volvo", "BMW", "Toyota");
        echo "<p><code>\$cars = array(\"Volvo\", \"BMW\", \"Toyota\");</code></p>";
        echo "<p>Accessing an element: <code>\$cars[0]</code> returns: " . $cars[0] . "</p>";
        echo "<p>Looping through an indexed array:</p>";
        echo "<ul>";
        foreach ($cars as $car) {
            echo "<li>" . $car . "</li>";
        }
        echo "</ul>";
        ?>
    </div>

    <div class="example">
        <h2>Associative Arrays</h2>
        <p>Arrays with named keys.</p>
        <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        echo "<p><code>\$age = array(\"Peter\"=>\"35\", \"Ben\"=>\"37\", \"Joe\"=>\"43\");</code></p>";
        echo "<p>Accessing an element: <code>\$age['Peter']</code> returns: " . $age['Peter'] . "</p>";
        echo "<p>Looping through an associative array:</p>";
        echo "<ul>";
        foreach ($age as $name => $age_value) {
            echo "<li>" . $name . " is " . $age_value . " years old.</li>";
        }
        echo "</ul>";
        ?>
    </div>

    <div class="example">
        <h2>Multidimensional Arrays</h2>
        <p>Arrays containing other arrays.</p>
        <?php
        $dealership = array(
            array("Volvo", 22, 18),
            array("BMW", 15, 13),
            array("Saab", 5, 2),
            array("Land Rover", 17, 15)
        );
        echo "<p>Accessing an element: <code>\$dealership[0][0]</code> returns: " . $dealership[0][0] . "</p>";
        echo "<p>Looping through a multidimensional array:</p>";
        echo "<ul>";
        for ($row = 0; $row < 4; $row++) {
            echo "<li><b>Row number $row</b></li>";
            echo "<ul>";
            for ($col = 0; $col < 3; $col++) {
                echo "<li>" . $dealership[$row][$col] . "</li>";
            }
            echo "</ul>";
        }
        echo "</ul>";
        ?>
    </div>

</body>
</html>
