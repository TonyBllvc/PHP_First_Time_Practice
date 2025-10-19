
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements </title>
</head>
<body>

    <?php 

        // PHP - The if...else Statement
        // The if...else statement executes some code if a condition is true and another code if that condition is false.
        // 
        // Syntax
        // if (condition) {
        //   code to be executed if condition is true;
        // } else {
        //   code to be executed if condition is false;
        // }

        // Example
        // Output "Have a good day!" if the current time is less than 20, and "Have a good night!" otherwise:
        
        $t = date("H");
        
        if ($t < "20") {
          echo "Have a good day!";
        } else {
          echo "Have a good night!";
        }

        echo "<br />";

        // PHP - The if...elseif...else Statement
        // The if...elseif...else statement executes different codes for more than two conditions.

        // Syntax
        // if (condition) {
        //   code to be executed if this condition is true;
        // } elseif (condition) {
          // code to be executed if first condition is false and this condition is true;
        // } else {
          // code to be executed if all conditions are false;
        // }

        // Example
        // Output "Have a good morning!" if the current time is less than 10, and "Have a good day!" if the current time is less than 20. Otherwise it will output "Have a good night!":
        
        $t = date("H");

        echo $t;
        echo "<br />";
        
        if ($t < "10") {
          echo "Have a good morning!";
        } elseif ($t < "20") {
          echo "Have a good day!";
        } else {
          echo "Have a good night!";
        }


    ?>


    
</body>
</html>