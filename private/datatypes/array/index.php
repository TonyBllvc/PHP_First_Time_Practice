<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array</title>
</head>
<body>
    

    <?php

        // PHP Array
        // An array stores multiple values in one single variable:

        // Example
        $cars = array("Volvo", "BMW", "Toyota");

        // What is an Array?
        // An array is a special variable that can hold many values under a single name, and you can access the values by referring to an index number or name.
        
        // PHP Array Types
        // In PHP, there are three types of arrays:
        
        // Indexed arrays - Arrays with a numeric index
        // Associative arrays - Arrays with named keys
        // Multidimensional arrays - Arrays containing one or more arrays

        // Array Items
        // Array items can be of any data type.

        // The most common are strings and numbers (int, float), but array items can also be objects, functions or even arrays.

        // You can have different data types in the same array.
        
        // function example:// Define the function

        // Read up on this later
        function myFunction() {
            echo "This text comes from a function";
        }
        
        // Create array
        $myArr = array("Volvo", 15, ["apples", "bananas"], "myFunction");
        
        // Call the function stored in the array (if needed)
        if (is_callable($myArr[3])) {
            call_user_func($myArr[3]); // Outputs: This text comes from a function
        }

        // .. come back to this from (https://www.w3schools.com/php/php_arrays.asp)

    ?>


</body>
</html>