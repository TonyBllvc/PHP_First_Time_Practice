<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Constant </title>
</head>
<body>
    

    <?php

    /* 
    
        PHP Constants:
            Constants are like variables, except that once they are defined they cannot be changed or undefined.

            - A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
            - A valid constant name starts with a letter or underscore (no $ sign before the constant name).
            - Note: Unlike variables, constants are automatically global across the entire script.

            We have two types:
                i: const 
                ii: define()
    */

            // Create a PHP "Define" Constant
            // To create a define constant, we use the define() function.
            // Syntax: define(name, value);

            // Where Parameters are:
            // name: Specifies the name of the constant
            // value: Specifies the value of the constant

            // Example
            define("SITE_NAME", "My Awesome Site");
            define("SITE_URL", "https://www.myawesomesite.com");
            echo SITE_NAME . '<br />';
            echo SITE_URL . '<br />';
            
            // Create a PHP "const" Constant
            // PHP const Keyword
            // You can also create a constant by using the const keyword.
            const MYCAR = "Volvo";
            echo MYCAR . '<br />';

            // const vs. define()

            // const cannot be created inside another block scope, like inside a function or inside an if statement.
            // define() can be created inside another block scope.

        /*
            PHP Constant Arrays
            From PHP7, you can create an Array constant using the define() function.
            
        */
            
            // Example
            // Create an Array constant:
            
            define("cars", [
              "Alfa Romeo",
              "BMW",
              "Toyota"
            ]);
            echo cars[0] . '<br />';

        /*
            Constants are Global
            Constants are automatically global and can be used across the entire script.
            
        */

            
            // Example
            // This example uses a constant inside a function, even if it is defined outside the function:
            
            define("GREETING", "Welcome to W3Schools.com!");
            
            function myTest() {
              echo GREETING . '<br />';
            }
            
            myTest();
    ?>


</body>
</html>