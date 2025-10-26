<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Classes and Objects</title>
</head>
<body>


    <?php 

        // A class is a template for objects, and an object is an instance of class.
        
        // OOP Case
        // Let's assume we have a class named FruitOne. A FruitOne can have properties like name, color, weight, etc. We can define variables like $name, $color, and $weight to hold the values of these properties.
         
        // When the individual objects (apple, banana, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
         
        // Define a Class
        // A class is defined by using the class keyword, followed by the name of the class and a pair of curly braces ({}). All its properties and methods go inside the braces:


        class FruitOne {
          // Properties
          public $name;
          public $color;
        
          // Methods
          function set_name($name) {
            $this->name = $name;
          }
          function get_name() {
            return $this->name;
          }
        }

        // Note: In a class, variables are called properties and functions are called methods!


        // Define Objects
        // Classes are nothing without objects! We can create multiple objects from a class. Each object has all the properties and methods defined in the class, but they will have different property values.
            
        // Objects of a class are created using the new keyword.
            
        // In the example below, $apple and $banana are instances of the class FruitTwo:
        class FruitTwo {
            // Properties
            public $name;
            public $color;
          
            // Methods
            function set_name($name) {
              $this->name = $name;
            }
            function get_name() {
              return $this->name;
            }
          }
          
          $apple = new FruitTwo();
          $banana = new FruitTwo();
          $apple->set_name('Apple');
          $banana->set_name('Banana');
          
          echo $apple->get_name(); // Apple
          echo "<br>";
          echo $banana->get_name(); // Banana
          echo "<br>";

        //   In the example below, we add two more methods to class FruitThree, for setting and getting the $color property:

          class FruitThree {
            // Properties
            public $name;
            public $color;
          
            // Methods
            function set_name($name) {
              $this->name = $name;
            }
            function get_name() {
              return $this->name;
            }
            function set_color($color) {
              $this->color = $color;
            }
            function get_color() {
              return $this->color;
            }
          }
          
          $apple = new FruitThree();
          $apple->set_name('Apple');
          $apple->set_color('Red');
          echo "Name: " . $apple->get_name();
          echo "<br>";
          echo "Color: " . $apple->get_color();
          echo "<br>";

        // PHP - The $this Keyword
        // The $this keyword refers to the current object, and is only available inside methods.
            
        // Look at the following example:
            
        // Example
            
        class FruitFour {
          public $name;
        }
        $apple = new FruitFour();
        
          echo "<br>";
        // So, where can we change the value of the $name property? There are two ways:
        
        // 1. Inside the class (by adding a set_name() method and use $this):
        
        // Example
        
        class FruitFive {
          public $name;
          function set_name($name) {
            $this->name = $name;
          }
        }
        $apple = new FruitFive();
        $apple->set_name("Apple");
        
        echo $apple->name;
        echo "<br>";
        
        // 2. Outside the class (by directly changing the property value):

        // Example
        
        class FruitSix {
          public $name;
        }
        $apple = new FruitSix();
        $apple->name = "Apple";
        
        echo $apple->name;
        echo "<br>";
        
        
        // PHP - instanceof
        // You can use the instanceof keyword to check if an object belongs to a specific class:
        
        // Example

        $apple = new FruitSix();
        var_dump($apple instanceof FruitSix); // true
    ?>
    
</body>
</html>