
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> My first PHP file</title>
</head>
<body>

<h1>
    
    <?php 
        // $PHP Associative Arrays
        // Associative arrays are arrays that use named keys that you assign to them.
        
        // Example
        $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
        var_dump($car);
        echo "<br />";

        // Access Associative Arrays
        // To access an array item you can refer to the key name.

        // Example
        // Display the model of the car:

        $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
        echo $car["model"];
        echo "<br />";

        // Change Value
        // To change the value of an array item, use the key name:

        // Example
        // Change the year item:

        $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
        $car["year"] = 2024;
        var_dump($car);
        echo "<br />";

        // *** Loop Through an Associative Array ***
        // To loop through and print all the values of an associative array, you could use a foreach loop, like this:
        
        // Example
        // Display all array items, keys and values:
        
        $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
        
        foreach ($car as $x => $y) {
          echo "$x: $y <br>";
        }
    ?>
</h1>


</body>
</html>