<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Inheritance</title>
</head>
<body>
    

    <?php

        // PHP - What is Inheritance?
        // Inheritance in OOP = When a class derives from another class.

        // The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.

        // An inherited class is defined by using the extends keyword.

        // NOTE: "extends" keyword is used to derive a class from another class. This is called inheritance. A derived class has all of the public and protected properties of the class that it is derived from.

        // Let's look at an example:
    
        class Fruit {
            public $name;
            public $color;
            public function __construct($name, $color) {
              $this->name = $name;
              $this->color = $color;
            }
            public function intro() {
              echo "The fruit is {$this->name} and the color is {$this->color}.";
            }
          }
          
          // Strawberry is inherited from Fruit
          class Strawberry extends Fruit {
            public function message() {
              echo "Am I a fruit or a berry? ";
            }
          }
          $strawberry = new Strawberry("Strawberry", "red");
          $strawberry->message();
          $strawberry->intro();
          
    
    ?>

</body>
</html>