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
        // The protected keyword is an access modifier. It marks a property or method as protected.
        
        // Protected properties and methods can only be used by the class in which the property or method was defined and any classes that derive from it. Any other code cannot use them.
    
        class MyClass {
            protected $number = 0;
          }
          
          class AnotherClass extends MyClass {
            public function add1() {
              $this->number++;
            }
          
            public function getNumber() {
              return $this->number;
            }
          }
          
          $obj = new AnotherClass();
          $obj->add1();
          echo "The number is " . $obj->getNumber();
          
    ?>
    
</body>
</html>