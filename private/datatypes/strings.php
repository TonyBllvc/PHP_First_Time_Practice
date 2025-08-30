
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
        echo "String Variable (Single Quotes): " . $stringVar2 . "<br>";

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
            i: The PHP strlen() function returns the length of a string.
            ii: The PHP str_word_count() function counts the number of words in a string.
            iii: The PHP strpos() function finds the position of the first occurrence of a substring in a string.
        */
            $text = "Hello world!";
            echo strlen($text);
            echo "<br>";
            echo str_word_count($text);
            echo "<br>";
            echo strpos($text, "world");
            echo "<br>";

        /*
            String modifiers
                i: The PHP strtoupper() function converts a string to uppercase.
                ii: The PHP strtolower() function converts a string to lowercase.
                iii: The PHP ucfirst() function capitalizes the first letter of a string.
                iv: The PHP substr() function returns a part of a string.
                v: The PHP str_replace() function replaces all occurrences of a search string with a replacement string.
                vi: The PHP strrev() function reverses a string.
                vii: The PHP trim() function removes whitespace from the beginning and end of a string.
        */
            $textTwo = "Hello world!";
                echo "<br>";
                echo strtoupper($textTwo);
                echo "<br>";
                echo strtolower($textTwo);
                echo "<br>";
                echo ucfirst($textTwo);
                echo "<br>";
                echo substr($textTwo, 6);
                echo "<br>";
                echo str_replace("world", "PHP", $textTwo);
                echo "<br>";
                echo strrev($textTwo);
                echo "<br>";
                echo trim($textTwo);
                echo "<br>";
                echo "<br>";

        /*
                    String Concatenate
                    i: The PHP . operator is used to concatenate strings.
                    ii: The PHP double quotes is also used for concatenation.
        */
            $firstName = "John";
            $lastName = "Doe";

            // -- To concatenate, or combine, two strings you can use the . operator:
            $fullName = $firstName . " " . $lastName; // Concatenating strings with . operator

            // -- You can also use double quotes for concatenation:
            $fullName2 = "$firstName $lastName"; // Concatenating strings with double quotes

            echo "Full Name: " . $fullName;
            echo "<br>";
            echo "Full Name 2: " . $fullName2;
            echo "<br>";
            echo "<br>";

            // To run the . operator on two integers
            $num1 = 5;
            $num2 = 10;
            $result = $num1 . $num2; // This will concatenate the two numbers as strings
            echo "Concatenated Result: " . $result;
            echo "<br>";
            echo "<br>";

        /*
            Slicing Strings:
                The PHP substr() function is used to extract a part of a string (slice a string).

        */
            // Slice a String:
            //   You can extract a part of a string by using the substr() function.
            //   Specify the start index and the number of characters you want to return.

            // Note The first character has index 0.

            $textThree = "Hello world!";

            // Start the slice at index 6 and go all the way to the end:
            echo substr($textThree, 6); // world!
            echo "<br>";

            // Start the slice at index 0 and end the slice 5 positions later:
            echo substr($textThree, 0, 5); // Hello
            echo "<br>";
            
            // Start the slice from the end, and go all the way 6 characters to the end again
            echo substr($textThree, -6); // world!
            echo "<br>";

            // Get the 3 characters, starting from the "o" in world (index -5):
            echo substr($textThree, -5, 3); // orl
            echo "<br>";
            echo "<br>";

        // Escape character in strings
        $escapedString = "He said, \"Hello, World!\"";
        echo $escapedString;

    ?>
</h4>

</body>
</html>