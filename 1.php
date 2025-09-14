<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <?php
    // This is a single-line comment
    /*
        This is a multi-line comment
        that spans multiple lines.
    */
        echo "Hello, World!";
    ?>

    <h2>Variables</h2>
    <?php
    // A variable is a container for storing information.
    // In PHP, a variable starts with the $ sign, followed by the name of the variable.
    $greeting = "Hello";
    $name = "World";

    // Concatenation is joining two or more strings together.
    // In PHP, the . (dot) operator is used for concatenation.
    $message = $greeting . ", " . $name . "!";
    echo $message;
    ?>

    <h2>Data Types</h2>
    
    <h2>Single vs. Double Quotes</h2>
    <?php
    $name = "John";

    echo '<h3>Single-quoted string:</h3>';
    echo '<p>Hello, $name!</p>'; // Output: Hello, $name!

    echo '<h3>Double-quoted string:</h3>';
    echo "<p>Hello, $name!</p>"; // Output: Hello, John!
    ?>

</body>
</html>