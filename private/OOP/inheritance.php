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
    
        class FruitNine {
            public $name;
            public $color;
            public function __construct($name, $color) {
              $this->name = $name;
              $this->color = $color;
            }
            public function intro() {
              echo "The fruit is {$this->name} and the color is {$this->color}. <br />";
            }
          }
          
          // Strawberry is inherited from FruitNine
          class StrawberryOne extends FruitNine {
            public function message() {
              echo "Am I a fruit or a berry? <br />";
            }
          }
          $strawberry = new StrawberryOne("Strawberry", "red");
          // $strawberry->name; // Accessing inherited property
          $strawberry->message(); // Call the message() method from the Strawberry class
          $strawberry->intro(); // Call the intro() method from the Strawberry class derived from FruitNine class
          

          // Example Explained
          // The Strawberry class is inherited from the FruitNine class.
                  
          // This means that the Strawberry class can use the public $name and $color properties as well as the public __construct() and intro() methods from the FruitNine class because of inheritance.
                  
          // The Strawberry class also has its own method: message().


          // __ PHP - Inheritance and the Protected Access Modifier ___
          // In the previous chapter we learned that protected properties or methods can be accessed within the class and by classes derived from that class. What does that mean?

          // Let's look at an example:

          class FruitTen {
            public $name;
            public $color;
            public function __construct($name, $color) {
              $this->name = $name;
              $this->color = $color;
            }
            protected function intro() {
              echo "The fruit is {$this->name} and the color is {$this->color}. <br />";
            }
          }
          
          class StrawberryTwo extends FruitTen {
            public function message() {
              echo "Am I a fruit or a berry?  <br />";
            }
          }
          
          // Try to call all three methods from outside class
          $strawberry = new StrawberryTwo("Strawberry", "red");  // OK. __construct() is public
          $strawberry->message(); // OK. message() is public
          // $strawberry->intro(); // ERROR. intro() is protected

          // Note: The intro() method is declared as protected in the FruitTen class. This means that it can be accessed by the StrawberryTwo class (which is derived from the FruitTen class). However, it cannot be accessed from outside the classes.

          // Now In the example above we see that if we try to call a protected method (intro()) from outside the class, we will receive an error.

          // The public method will work fine!
          
          // Let's look at another example:
          class FruitEleven {
            public $name;
            public $color;
            public function __construct($name, $color) {
              $this->name = $name;
              $this->color = $color;
            }
            protected function intro() {
              echo "The fruit is {$this->name} and the color is {$this->color}. <br />";
            }
          }
          
          class StrawberryThree extends FruitEleven {
            public function message() {
              echo "Am I a fruit or a berry?  <br />";
              // Call protected method from within derived class - OK
              $this -> intro();
            }
          }
          
          $strawberry = new StrawberryThree("Strawberry", "red"); // OK. __construct() is public
          $strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class

          // In the example above we see that all works fine! It is because we call the protected method (intro()) from inside the derived class.


          // __ PHP - Overriding Inherited Methods ___
        
          // Inherited methods can be overridden by redefining the methods (use the same name) in the child class.

          // Look at the example below. The __construct() and intro() methods in the child class (Strawberry) will override the __construct() and intro() methods in the parent class (Fruit):

          class FruitTwelve {
            public $name;
            public $color;
            public function __construct($name, $color) {
              $this->name = $name;
              $this->color = $color;
            }
            public function intro() {
              echo "The fruit is {$this->name} and the color is {$this->color}. <br />";
            }
          }
          
          class StrawberryFour extends FruitTwelve {
            public $weight;
            public function __construct($name, $color, $weight) {
              $this->name = $name;
              $this->color = $color;
              $this->weight = $weight;
            }
            public function intro() {
              echo "The fruit is $this->name, the color is $this->color, and the weight is $this->weight gram.  <br />";
            }
          }
          
          $strawberry = new StrawberryFour("Strawberry", "red", 50);
          $strawberry->intro();
          

          // ____ PHP - The final Keyword ______
          // The final keyword can be used to prevent class inheritance or to prevent method overriding.

          // The following example shows how to prevent class inheritance:
          final class FruitThirteen {
            // some code
          }
          
          // will result in error
          // class StrawberryFive extends FruitThirteen {
          //   // some code
          // }

          // Another example shows how to prevent method overriding:

          class FruitFourteen {
            final public function intro() {
              // some code
            }
          }

          class StrawberryFive extends FruitFourteen {
            // will result in error
            // public function intro() {
            //   // some code
            // }
          }
    ?>

</body>
</html>