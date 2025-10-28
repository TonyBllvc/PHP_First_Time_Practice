<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operators - Others (object & Scope Resolution </title>
</head>
<body>

    <?php
        // -> in PHP

        // Official Name: Object Operator
        // Purpose: Access object properties and methods from an instance of a class.

        // When you create an object with new, the -> is your “dot” like in many other languages.
    
        class MottoOne {
            public $brand = "Toyota";
        }

        $motto_one = new MottoOne();
        echo $motto_one->brand; // Toyota

        class MottoTwo {
            public function start() {
                return "Engine is running!";
            }
        }

        $motto_two = new MottoTwo();
        echo $motto_two->start(); // Engine is running!

        // other instances 
        // Chaining (fluent interface):
        $user->setName("George")->setRole("Admin")->save();

        // Accessing nested objects:
        $order->customer->address->city;

        // Works with variable property names too:
        $property = "brand";
        echo $motto_one->$property; // Toyota

        // So anytime you're dealing with an object instance (not the class itself), -> is the connector.


        // :: in PHP

        // Official Name: Scope Resolution Operator
        // Some folks also call it the Paamayim Nekudotayim (Hebrew for “double colon”) because of a historic parser error message in early PHP versions.

        // Purpose: Access static properties, static methods, class constants or overridden parent methods.

        // ... continue, combine and compare php on w3schools and AI: chatgpt history

    ?>


</body>
</html>