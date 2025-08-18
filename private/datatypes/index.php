

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Data-types </title>
</head>
<body>

<h4>
    
    <?php

        $stringVar = "Hello, World!"; // strings
        $intVar = 42; // integers
        $floatVar = 3.14; // floats
        $boolVar = true; // booleans
        $arrVar = array("apple", "banana", "cherry"); // arrays
        $nullVar = null; // null
        $resourceVar = fopen("example.txt", "r"); // resource(this isn't really a datatype)

        /* 
            To get the type of a variable, you can use the gettype() or var_dump() function.
        */
            // using gettype():
            echo "<h2>using gettype():</h2><br>";
            echo "1. String Variable Type: " . gettype($stringVar) . "<br> <br/>";
            echo "2. Integer Variable Type: " . gettype($intVar) . "<br> <br/>";
            echo "3. Float Variable Type: " . gettype($floatVar) . "<br> <br/>";
            echo "4. Boolean Variable Type: " . gettype($boolVar) . "<br> <br/>";
            echo "5. Array Variable Type: " . gettype($arrVar) . "<br> <br/>";
            echo "6. NULL Variable Type: " . gettype($nullVar) . "<br> <br/>";
            echo "7. Resource Variable Type: " . gettype($resourceVar) . "<br> <br/>";

            // or using var_dump(): 
            echo "<h2>using var_dump():</h2><br>";
            echo "1. String Variable Type: " . var_dump($stringVar) . "<br> <br/>";
            echo "2. Integer Variable Type: " . var_dump($intVar) . "<br> <br/>";
            echo "3. Float Variable Type: " . var_dump($floatVar) . "<br> <br/>";
            echo "4. Boolean Variable Type: " . var_dump($boolVar) . "<br> <br/>";
            echo "5. Array Variable Type: " . var_dump($arrVar) . "<br> <br/>";
            echo "6. NULL Variable Type: " . var_dump($nullVar) . "<br> <br/>";
            echo "7. Resource Variable Type: " . var_dump($resourceVar) . "<br> <br/>";

    ?>

</h4>


</body>
</html>