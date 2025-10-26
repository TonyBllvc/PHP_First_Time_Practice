<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP public keyword</title>
</head>
<body>

    <?php

    // Definition and Usage
    // The private keyword is an access modifier. It marks a property or method as private.
    
    // Private properties and methods can only be used by the class in which the property or method was defined. Derived classes and outside code cannot use them.
    
    class MyClass {
        private $number = 0;
      
        public function add1() {
          $this->number++;
       }
      
        public function getNumber() {
          return $this->number;
        }
      }
      
      $obj = new MyClass();
      $obj->add1();
      echo "The number is " . $obj->getNumber();

    
    ?>
    
</body>
</html>