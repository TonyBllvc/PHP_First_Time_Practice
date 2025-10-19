
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements </title>
</head>
<body>

    <?php 

        // PHP - The if Statement
        // The if statement executes some code if one condition is true.
        // 
        // Syntax
        // if (condition) {
        //   code to be executed if condition is true;
        // }


        // Example
        // Output "Have a good day!" if 5 is larger than 3:
         
        if (5 > 3) {
          echo "Have a good day!";
        }
        
        echo "<br />";
        // We can also use variables in the if statement:

        // Example
        // Output "Have a good day!" if $t is less than 20:
            
        $t = 14;
        
        if ($t < 20) {
          echo "Have a good day!";
        }
    ?>


    
</body>
</html>