
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Strings and their Types: Single and Double quotes </title>
</head>
<body>

<h4>
    <?php
        $stringVar = "Hello, World!"; // double quotes
        $stringVar2 = 'Hello, World!'; // single quotes

        echo "String Variable (Double Quotes): " . $stringVar . "<br>";
        echo "String Variable (Single Quotes): " . $stringVar2;

        /* 
             Major differences: 
                i: Double quotes process special characters
                ii: Single quotes does not.
        */
                
                // Example of special character processing
                $name = "John";

                // Double quoted strings perform action on special characters.
                // E.g. when there is a variable in the string, it returns the value of the variable
                echo "Hello, $name"; // Double quotes will replace $name with "John"

                // Single quoted strings does not perform such actions, it returns the string like it was written, with the variable name:
                    // E.g.Single quoted string literals returns the string as it is:
                echo 'Hello, $name'; // Single quotes will not replace $name


        /* 
        The PHP strlen() function returns the length of a string.
        */
        echo strlen("Hello world!");
    ?>
</h4>

</body>
</html>