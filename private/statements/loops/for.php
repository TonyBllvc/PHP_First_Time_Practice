<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop</title>
</head>
<body>

    <?php

        // The PHP for loop - Loops through a block of code a specified number of times.

        // The PHP for Loop
        // The for loop is used when you know how many times the script should run.
        // 
        // Syntax
        // for (expression1, expression2, expression3) {
        //   code block
        // }
        
        // This is how it works:

        // expression1 is evaluated once
        // expression2 is evaluated before each iteration
        // expression3 is evaluated after each iteration
    
        // Example
        // Print the numbers from 0 to 10:

        for ($x = 0; $x <= 10; $x++) {
          echo "The number is: $x <br>";
        }
    
        // Example Explained
        // 1. The first expression, $x = 0;, is evaluated once and sets a counter to 0.
        // 2. The second expression, $x <= 10;, is evaluated before each iteration, and the code block is only executed if this expression evaluates to true. In this example the expression is true as long as $x is less than, or equal to, 10.
        // 3. The third expression, $x++;, is evaluated after each iteration, and in this example, the expression increases the value of $x by one at each iteration.

    ?>

</body>
</html>