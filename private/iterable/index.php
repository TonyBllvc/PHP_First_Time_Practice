
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iterables</title>
</head>
<body>
    
    <?php
        // ___ PHP - What is an Iterable? ___
        // An iterable is any value which can be looped through with a foreach() loop.
        
        // The iterable pseudo-type was introduced in PHP 7.1, and it can be used as a data type for function arguments and function return values.


        // ___ PHP - Using Iterables ___
        // The iterable keyword can be used as a data type of a function argument or as the return type of a function:

        // Example
        // Use an iterable function argument:

    
        function printIterable(iterable $myIterable) {
          foreach($myIterable as $item) {
            echo $item;
          }
        }

        $arr = ["a", "b", "c"];
        printIterable($arr);

        // Example
        // Return an iterable:

        
        function getIterable() : iterable {
          return ["a", "b", "c"];
        }

        $myIterable = getIterable();
        
        foreach($myIterable as $item) {
          echo $item;
        }
    ?>
</body>
</html>