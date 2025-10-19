<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each Loop</title>

    <script>
        class Car{
            constructor(name){
                this.name = name
            }
        }

        const myCar = new Car('BMW')
        console.log(myCar.name)
    </script>
</head>
<body>

    <?php

        // The PHP foreach loop - Loops through a block of code for each element in an array or each property in an object.

        // The PHP foreach Loop on Arrays
        // The most common use of the foreach loop, is to loop through the items of an array.
        $colors = array("red", "green", "blue", "yellow");

        foreach ($colors as $x) {
          echo "$x <br>";
        }

        //   Note: For every loop iteration, the value of the current array element is assigned to the variable $x. The iteration continues until it reaches the last array element.



        // Keys and Values
        // The array above is an indexed array, where the first item has the key 0, the second has the key 1, and so on.
            
        // Associative arrays are different, associative arrays use named keys that you assign to them, and when looping through associative arrays, you might want to keep the key as well as the value.
            
        // This can be done by specifying both the key and value in the foreach definition, like this:
        
        // Example
        // Print both the key and the value from the $members array:

        echo "<br />";
        
        $members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        
        foreach ($members as $x => $y) {
          echo "$x : $y <br>";
        }



        // The PHP foreach Loop on Objects
        // The foreach loop can also be used to loop through properties of an object:
        
        // Example
        // Print the property names and values of the $myCar object:
        
        class Car {
          public $color;
          public $model;
          public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
          }
        }

        $myCar = new Car("red", "Volvo");

        foreach ($myCar as $x => $y) {
          echo "$x: $y <br>";
        }


        // PHP Foreach Loop Byref
        // When looping through the array items, any changes done to the array item will, by default, NOT affect the original array:

        // Example
        // By default, changing an array item will not affect the original array:

        $coloring = array("red", "green", "blue", "yellow");

        foreach ($coloring as $x) {
          if ($x == "blue") $x = "pink";
        }

        var_dump($coloring);
        echo "<Br />";
        // BUT, by using the & character in the foreach declaration, the array item is assigned by reference, which results in any changes done to the array item will also be done to the original array:

        // Example
        // By assigning the array items by reference, changes will affect the original array:
        
        $colors = array("red", "green", "blue", "yellow");
        
        foreach ($colors as &$x) {
          if ($x == "blue") $x = "pink";
        }
        
        var_dump($colors);


        // Alternative Syntax
        // The foreach loop syntax can also be written with the endforeach statement like this
            
        // Example
        // Loop through the items of an indexed array:
            
        $colors = array("red", "green", "blue", "yellow");
            
        foreach ($colors as $x) :
          echo "$x <br>";
        endforeach;
    ?>

</body>
</html>