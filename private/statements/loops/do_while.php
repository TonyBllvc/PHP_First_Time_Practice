<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do..while Loop</title>
</head>
<body>

    <?php

        
        // The PHP do...while loop - Loops through a block of code once, and then repeats the loop as long as the specified condition is true.

        // The PHP do...while Loop
        // The do...while loop will always execute the block of code at least once, it will then check the condition, and repeat the loop while the specified condition is true.


        $i = 1;

        do {
          echo $i;
          $i++;
        } while ($i < 6);
        
        //  Note: In a do...while loop the condition is tested AFTER executing the statements within the loop. This means that the do...while loop will execute its statements at least once, even if the condition is false

        echo "<br />";
        
        // What about when $j = 8??
        $j = 8;

        do {
          echo $j;
          $j++;
        } while ($j < 6);
    
    ?>

</body>
</html>