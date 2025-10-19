<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Functions</title>
</head>
<body>

    <?php

        // PHP User Defined Functions
        // Besides the built-in PHP functions, it is possible to create your own functions.
        // 
        // A function is a block of statements that can be used repeatedly in a program.
        // A function will not execute automatically when a page loads.
        // A function will be executed by a call to the function.

        // Create a Function
        // A user-defined function declaration starts with the keyword function, followed by the name of the function:
        
        // Example
        
        function myMessage() {
          echo "Hello world!";
        }

        // Note: A function name must start with a letter or an underscore. Function names are NOT case-sensitive.

        // Tip: Give the function a name that reflects what the function does!

        // Call a Function
        // To call the function, just write its name followed by parentheses ():

        // Example
        function myMessageTwo() {
          echo "Hello world!";
        }

        myMessageTwo();

        // In our example, we create a function named myMessage().

        // The opening curly brace { indicates the beginning of the function code, and the closing curly brace } indicates the end of the function.
 
        // The function outputs "Hello world!".

        
    ?>

</body>
</html>