<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Arguments</title>
</head>
<body>


    <?php


        // PHP Function Arguments
        // Information can be passed to functions through arguments. An argument is just like a variable.
        // 
        // Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.
        // 
        // The following example has a function with one argument ($fname). When the familyName() function is called, we also pass along a name, e.g. ("Jani"), and the name is used inside the function, which outputs several different first names, but an equal last name:
        // 
        // Example 1:

        function familyName($fname) {
          echo "$fname Refsnes.<br>";
        }
        
        familyName("Jani");
        familyName("Hege");
        familyName("Stale");
        familyName("Kai Jim");
        familyName("Borge");

        // The following example has a function with two arguments ($fname, $year):

        // Example 2:

        echo "<br />";

        function familyNameAndDOB($fname, $year) {
          echo "$fname Refsnes. Born in $year <br>";
        }

        familyNameAndDOB("Hege", "1975");
        familyNameAndDOB("Stale", "1978");
        familyNameAndDOB("Kai Jim", "1983");

        // Continue to "default_argument.php"...
    ?>
    
</body>
</html>