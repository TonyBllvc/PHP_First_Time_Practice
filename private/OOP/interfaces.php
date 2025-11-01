<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaces</title>
</head>
<body>
    

    <?php

        // PHP - What are Interfaces?
        // Interfaces allow you to specify what methods a class should implement.
        
        // Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".
         
        // Interfaces are declared with the interface keyword:

        interface InterfaceName {
            public function someMethod1();
            public function someMethod2($name, $color);
            public function someMethod3() : string;
          }


        // ___ PHP - Interfaces vs. Abstract Classes ___
        // Interface are similar to abstract classes. The difference between interfaces and abstract classes are:
        
        // Interfaces cannot have properties, while abstract classes can
        // All interface methods must be public, while abstract class methods is public or protected
        // All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
        // Classes can implement an interface while inheriting from another class at the same time
        // PHP - Using Interfaces
        // To implement an interface, a class must use the implements keyword.
        
        // A class that implements an interface must implement all of the interface's methods.
        
        // Example

        interface Animal {
            public function makeSound();
          }
          
          class Cat implements Animal {
            public function makeSound() {
              echo "Meow";
            }
          }
          
          $animal = new Cat();
          $animal->makeSound();
          
        // From the example above, let's say that we would like to write software which manages a group of animals. There are actions that all of the animals can do, but each animal does it in its own way.

        // Using interfaces, we can write some code which can work for all of the animals even if each animal behaves differently:

    ?>

</body>
</html>