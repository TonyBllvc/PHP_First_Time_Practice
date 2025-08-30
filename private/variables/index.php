<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    $name = "John";
    $age = 30;
    $isStudent = true;

    // PHP has three different variable scopes:
    //     1: local -> A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:
    //     2: global -> A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function
    //     3: static -> A static variable is a special type of variable that retains its value between function calls. when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

    // 2. ****** Global variable: *******
    //  ------- php
    // $x = 5; // global scope

    // function myTest() {
    //   // using x inside this function will generate an error
    //   // because it can only be accessed outside the function   
    // //   echo "<p>Variable x inside function is: $x</p>"; // error generated
    // }
    // myTest();
    
    // echo "<p>Variable x outside function is: $x</p>";
    // ------ end

    // 1. ****** Local variable: *******
    // ------- php
    // function myTest() {
    //     $x = 5; // local scope
    //     echo "<p>Variable x inside function is: $x</p>";
    //   }
    //   myTest();
      
    //   // using x outside the function will generate an error
    //   echo "<p>Variable x outside function is: $x</p>"; // does not exist
    // ----- end

    // NOTE: PHP The global Keyword
    //  The global keyword is used to access a global variable from within a function.

    // To do this, use the global keyword before the variables (inside the function):
    // ------- php
    // $x = 5;
    // $y = 10;

    // function myTest() {
    //   global $x, $y;
    //   $y = $x + $y;
    // }

    // myTest();
    // echo $y; // outputs 15
    // ------ end

    // ALSO: PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.

    // The example above can be rewritten like this:
    // ----- php
    // $x = 5;
    // $y = 10;
    // $z = 20;

    // function myTest() {
    //   $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    //   $GLOBALS['z'] += $GLOBALS['x'];
    // }

    // myTest();
    // echo $y; // outputs 15
    // echo "<br />";
    // echo $z; // outputs 25
    // ----- end
    

    // 3. ****** Global variable: *******
    //  ------- php
    function myTest() {
        static $x = 0;
        echo $x;
        $x++;
      }
      
      myTest();
      myTest();
      myTest();
    // ----- end

?>
</body>
</html>