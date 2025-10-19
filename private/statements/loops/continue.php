<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continue Keyword</title>
</head>
<body>

    <?php

        // The PHP continue Statement
        // With the continue statement we can stop the current iteration, and continue with the next:

        // Example
        // Stop, and jump to the next iteration if $i is 3:
        
        $i = 0;
        
        while ($i < 6) {
          $i++;
          if ($i == 3) continue;
          echo $i;
        }
    ?>

</body>
</html>