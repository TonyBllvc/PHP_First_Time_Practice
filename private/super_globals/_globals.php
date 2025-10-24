<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Superglobals - Globals</title>
</head>
<body>
    
    <?php 

        // ** $GLOBALS is an array that contains all global variables. **
         
        // Global Variables
        // Global variables are variables that can be accessed from any scope.
         
        // Variables of the outer most scope are automatically global variables, and can be used by any scope, e.g. inside a function.
        
        // To use a global variable inside a function you have to either define them as global with the global keyword, or refer to them by using the $GLOBALS syntax.

        // Example
        // Refer to the global variable $x inside a function:
        
        $x = 75;
          
        function my_function_one() {
          echo $GLOBALS['x'];
        }
        
        my_function_one();

        // This is different from other programming languages where global variables are available without specifically referring to them as global.

        // Example
        // In PHP you get nothing (or an error) when referring to a global variable without the $GLOBALS syntax:

        // $y = 75;

        function my_function_two() {
        //   echo $y;
        }

        my_function_two(); // Will not work

        // You can also refer to global variables inside functions by defining them as global with the global keyword.

        // Example
        // Define $x as global inside a function:

        $z = 75;

        function my_function_three() {
          global $z;
          echo $z;
        }

        my_function_three(); // Will work
        
        // *** Create Global Variables ****
        // Variables created in the outer most scope are global variables either if they are created using the $GLOBALS syntax or not:
        
        // Example
        $a = 100;
        
        echo $GLOBALS["a"];
        echo $a;

        // Variables created inside a function belongs only to that function, but you can create global variables inside a function by using the $GLOBALS syntax:

        // Example
        // Create a global variable from inside a function, and use it outside of the function:

        function my_function_four() {
          $GLOBALS["x"] = 100;
        }

        my_function_four();

        echo $GLOBALS["x"];
        echo $x;
        
    ?>

</body>
</html>

    ?>

</body>
</html>