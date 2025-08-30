<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More on Integers and Floats</title>
</head>
<body>


    <?php
    
        /*
            In PHP, there are three numeric types:
                i: Integers
                ii: Floats
                iii: Numbers Strings
        */

            $a = 5; // integer
            $b = 5.34; // float
            $c = "25"; // number string
            
            var_dump($a);
            echo "<br>";

            var_dump($b);
            echo "<br>";

            var_dump($c);

        /*
        In addition, PHP has two more data types used for numbers:
            i: Infinity
                - The PHP is_finite() function checks whether a value is finite or not.
                NOTE: A value is finite if it is within the allowed range for a PHP float on this platform.
            ii: NaN
                - The PHP is_nan() function checks whether a value is NaN (not a number) or not.
                NOTE: A value is NaN if it is not a legal number. NaN stands for Not a Number.

            
        */
            $x = 1.9e411;
            var_dump(is_infinite($x));

            $no = NAN;
            var_dump(is_nan($no));

            $xp = acos(8);
            var_dump($xp);

        /*
        The PHP 
            i: is_int() function is used to check if the type of a variable is integer.
        NOTE: An integer is a number without any decimal part: 2, 256, -256, 10358, -179567 are all integers.
            ii: is_float() function is used to check if the type of a variable is float.
            iii: is_numeric() function is used to check if a variable is a number or a numeric string.
        */
            $xa = 5985;
            var_dump(is_int($xa));

            $xb = 59.85;
            var_dump(is_int($xb));

            $xc = 59.85;
            var_dump(is_float($xc));

            $x = 5985;
            var_dump(is_numeric($x));
                    
            $x = "5985";
            var_dump(is_numeric($x));
            $x = "59.85" + 100;
            var_dump(is_numeric($x));
                    
            $x = "Hello";
            var_dump(is_numeric($x));
            // An integer data type is a non-decimal number between -2147483648 and 2147483647 in 32 bit systems, and between -9223372036854775808 and 9223372036854775807 in 64 bit systems. A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer.

    ?>

</body>
</html>