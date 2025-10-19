
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Indexed Array</title>
</head>
<body>

<h1>
    <?php
    
        // PHP Indexed Arrays
        // In indexed arrays each item has an index number.
        
        // By default, the first item has index 0, the second item has item 1, etc.

        $carsOne = array("Volvo", "BMW", "Toyota");
        var_dump($carsOne);
        echo "<br />";
        
        // *** Access Indexed Arrays ***
        // To access an array item you can refer to the index number.
        
        // Example
        // Display the first array item:
        
        $carsTwo = array("Volvo", "BMW", "Toyota");
        echo $carsTwo[0]; // Volvo
        echo "<br />";

        // *** Change Value ***
        // To change the value of an array item, use the index number:

        // Example
        // Change the value of the second item:

        $carsThree = array("Volvo", "BMW", "Toyota");
        $carsThree[1] = "Ford";
        var_dump($carsThree);
        echo "<br />";

        // *** Loop Through an Indexed Array ***
        // To loop through and print all the values of an indexed array, you could use a foreach loop, like this:
        
        // Example
        // Display all array items:
        $carsFour = array("Volvo", "BMW", "Toyota");
        foreach ($carsFour as $x) {
          echo "value: $x <br>";
        }
        echo "<br />";

        // *** Index Number ***
        // The key of an indexed array is a number, by default the first item is 0 and the second is 1 etc., but there are exceptions.

        // New items get the next index number, meaning one higher than the highest existing index.

        // So if you have an array like this:
        
        $carsFive[0] = "Volvo";
        $carsFive[1] = "BMW";
        $carsFive[2] = "Toyota";
        // And if you use the array_push() function to add a new item, the new item will get the index 3:
        
        // Example
        array_push($carsFive, "Ford"); // index 3
        var_dump($carsFive);
        echo "<br />";

        // But if you have an array with random index numbers, like this:

        $carsSix[5] = "Volvo";
        $carsSix[7] = "BMW";
        $carsSix[14] = "Toyota";
        
        // And if you use the array_push() function to add a new item, what will be the index number of the new item?
        // It simply continue from the last visible index
        
        // Example
        array_push($carsSix, "Ford"); // index 15
        var_dump($carsSix);
        
    ?>
</h1>


</body>
</html>