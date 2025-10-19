<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop</title>
</head>
<body>

    <?php

        // The PHP while loop - Loops through a block of code as long as the specified condition is true.

        // The PHP while Loop
        // The while loop executes a block of code as long as the specified condition is true.
        $i = 1;
        while ($i < 6) {
            echo $i;
            $i++;
        }; 

        echo "<br />";
        //   Note: For this example, remember to increment $i, or else the loop will continue forever.


        // Alternative Syntax
        // The while loop syntax can also be written with the endwhile statement like this

        // Example
        // Print $i as long as $i is less than 6:

        $i = 1;
        while ($i < 6):
          echo $i;
          $i++;
        endwhile;

        echo "<br />";

        // Another example
        // If you want the while loop count to 100, but only by each 10, you can increase the counter by 10 instead 1 in each iteration:

            // Example
            // Count to 100 by tens:
            
        $j = 0;

        while ($j < 100) {
          $j+=10;
          echo "$i<br>";
        };
    ?>

</body>
</html>