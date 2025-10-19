<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More on Function Arguments</title>
</head>
<body>


    <?php


        // *** PHP Functions - Returning values ***
        // To let a function return a value, use the return statement:
        
        // Example

        function sum($x, $y) {
          $z = $x + $y;
          return $z;
        }
        
        echo "5 + 10 = " . sum(5, 10) . "<br>";
        echo "7 + 13 = " . sum(7, 13) . "<br>";
        echo "2 + 4 = " . sum(2, 4);

        // *** Passing Arguments by Reference ***
        // In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.

        // When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used:

        // Example
        // Use a pass-by-reference argument to update a variable:

        echo "<br />";

        function add_five(&$value) {
          $value += 5;
        }

        $num = 2;
        echo "Initial value " . $num; // initial value
        echo "<br />";
        add_five($num);
        echo "New Value: " . $num . "<br />"; // new value

        echo "<br />";

        // *** Variable Number of Arguments ***
        // By using the ... operator in front of the function parameter, the function accepts an unknown number of arguments. This is also called a variadic function.

        // The variadic function argument becomes an array.

        // Example
        // A function that do not know how many arguments it will get:

        function sumMyNumbers(...$x) {
          $n = 0;
          $len = count($x); // Counts all elements in an array, or something in an object.

          for($i = 0; $i < $len; $i++) {
            $n += $x[$i];
          }

          return $n;
        }

        $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
        echo $a . "<br />";

        // You can only have one argument with variable length, and it has to be the last argument.

        // Example
        // The variadic argument must be the last argument:

        function myFamily($last_name, ...$first_name) {
          $txt = "";
          $len = count($first_name);  // Counts all elements in an array, or something in an object.

          for($i = 0; $i < $len; $i++) {
            $txt = $txt . "Hi, $first_name[$i] $last_name.<br>";
          }

          return $txt;
        }

        $b = myFamily("Doe", "Jane", "John", "Joey");
        echo $b;

        // NOTE: If the variadic argument is not the last argument, you will get an error.


        // *** PHP is a Loosely Typed Language ***
        // In the examples above, notice that we did not have to tell PHP which data type the variable is.

        // PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.

        // In PHP 7, type declarations were added. This gives us an option to specify the expected data type when declaring a function, and by adding the strict declaration, it will throw a "Fatal Error" if the data type mismatches.

        // In the following example we try to send both a number and a string to the function without using strict:

        // Example
        echo "<br />";

        function addNumbers(int $a, int $b) { // Find out why this code is not working ...
          return $a + $b;
        }
        echo addNumbers(5, "5 days");
        // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10 ...
        // ... but it is not working as such for some reason
        
        // <?php 
        // declare(strict_types=1); // strict requirement
        
        //     function addNumber(int $a, int $b) {
        //       return $a + $b;
        //     }
        //     echo addNumber(5, "5 days");
        //     // since strict is enabled and "5 days" is not an integer, an error will be thrown
        
        // ? >

        //  NOTE: The strict declaration forces things to be used in the intended way.


        // *** PHP Return Type Declarations ***
        // PHP 7 also supports Type Declarations for the return statement. Like with the type declaration for function arguments, by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.
        
        // To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { )bracket when declaring the function.
        
        // In the following example we specify the return type for the function:
        
        // Example
        // <?php declare(strict_types=1); // strict requirement
        // function addNumbers(float $a, float $b) : float {
        //   return $a + $b;
        // }
        // echo addNumbers(1.2, 5.2);
        // ?>
    ?>

    
</body>
</html>