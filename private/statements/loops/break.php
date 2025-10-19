<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break Keyword</title>
</head>
<body>

    <?php

        // The PHP break Statement
        // With the break statement we can stop the loop even if the condition is still true:
        
        // Example
        // Stop the loop when $i is 3:
        
        $i = 1;
        
        while ($i < 6) {
          if ($i == 3) break;
          echo $i;
          $i++;
        }
    
    ?>

</body>
</html>