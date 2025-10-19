<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Switch </title>
</head>
<body>
    
    <?php

        // The PHP switch statement is used to perform different actions based on different conditions.
        
        // The PHP switch Statement
        // Use the switch statement to select one of many blocks of code to be executed.
         
        // Syntax
        // switch (expression) {
        //   case label1:
            // code block
            // break;
        //   case label2:
            // code block;
            // break;
        //   case label3:
            // code block
            // break;
        //   default:
            // code block
        // }

        // This is how it works:

        // The expression is evaluated once
        // The value of the expression is compared with the values of each case
        // If there is a match, the associated block of code is executed
        // The break keyword breaks out of the switch block
        // The default code block is executed if there is no match


        // Example:
        $fav_color = "red";

        switch ($fav_color) {
          case "red":
            echo "Your favorite color is red!";
            break;
          case "blue":
            echo "Your favorite color is blue!";
            break;
          case "green":
            echo "Your favorite color is green!";
            break;
          default:
            echo "Your favorite color is neither red, blue, nor green!";
        }

        // Warning: If you omit the break statement in a case that is not the last, and that case gets a match, the next case will also be executed even if the evaluation does not match the case!

        // The PHP default keyword specifies the code to run if there is no case match:

        // Putting  the default block elsewhere than at the end of the break block is allowed, but not recommended.



        // **** Common Code Blocks *****
        // If you want multiple cases to use the same code block, you can specify the cases like this:
        // 
        // Example
        // More than one case for each code block:
        // 
        // $d = 3;
        // 
        // switch ($d) {
        //   case 1:
        //   case 2:
        //   case 3:
        //   case 4:
        //   case 5:  
            // echo "The weeks feels so long!";
            // break;
        //   case 6:
        //   case 0:
            // echo "Weekends are the best!";
            // break;
        //   default:
            // echo "Something went wrong";
        // }

    ?>

</body>
</html>