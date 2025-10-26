<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP- The __construct() Function</title>
</head>
<body>
    
    <?php 

        // PHP - The __construct() Function
        // A constructor allows you to initialize an object's properties upon creation of the object.
        
        // If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
        
        // Notice that the construct function starts with two underscores (__)!
        
        // We see in the example below, that using a constructor saves us from calling the set_name() method which reduces the amount of code:

        // Example

        class FruitSeven {
          public $name;
          public $color;

          function __construct($name) {
            $this->name = $name;
          }
          function get_name() {
            return $this->name;
          }
        }

        $apple = new FruitSeven("Apple");
        echo $apple->get_name();

        echo "<br />";

        // Another Example

        class FruitEight {
            public $name;
            public $color;
          
            function __construct($name, $color) {
              $this->name = $name;
              $this->color = $color;
            }
            function get_name() {
              return $this->name;
            }
            function get_color() {
              return $this->color;
            }
          }
          
          $apple = new FruitEight("Apple", "red");
          echo $apple->get_name();
          echo "<br>";
          echo $apple->get_color();
          echo "<br>";

    ?>

</body>
</html>