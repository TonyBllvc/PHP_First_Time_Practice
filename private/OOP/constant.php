<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Class Constants </title>
</head>
<body>

    <?php

        /*
            PHP Class Constants
            - In addition to regular constants, PHP also supports class constants.
            - Class constants are declared inside a class with the const keyword.
            - Class constants cannot be changed once they are declared.
            - Class constants are case-sensitive. However, it is recommended to name the constants in all uppercase letters.
        */

        /*
        Class constants can be useful if you need to define some constant data within a class.

        A class constant is declared inside a class with the const keyword.

        A constant cannot be changed once it is declared.

        Class constants are case-sensitive. However, it is recommended to name the constants in all uppercase letters.

        We can access a constant from outside the class by using the class name followed by the scope resolution operator (::) followed by the constant name, like here:
        */

        class Goodbye {
            const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
          }
          
          echo Goodbye::LEAVING_MESSAGE;
          echo "<br />";

        //   Another example
        // Or, we can access a constant from inside the class by using the self keyword followed by the scope resolution operator (::) followed by the constant name, like here:

        class Pi {
            const VALUE = 3.14159;
            public function showValue() {
                return self::VALUE;
            }
        }

        $pi = new Pi();
        echo "The value of Pi is: " . $pi->showValue() . '<br />';
        echo "Accessing constant directly: " . Pi::VALUE . '<br />';


    ?>
    
</body>
</html>