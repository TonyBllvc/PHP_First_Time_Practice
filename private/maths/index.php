<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Math's functions</title>
</head>
<body>

    <?php 

    /*
        PHP Math Functions
        PHP has a set of math functions that allows you to perform mathematical tasks on numbers.
    */

        // PHP pi() Function:
        //   The pi() function returns the value of PI:
        echo pi(); // returns 3.1415926535898...

        // PHP min() and max() Functions:
        //  The min() and max() functions can be used to find the lowest or highest value in a list of arguments:

        echo(min(0, 150, 30, 20, -8, -200) . "<br>"); // -200
        echo(max(0, 150, 30, 20, -8, -200) . "<br>"); // 150

        // PHP abs() Function:
        //  The abs() function returns the absolute (positive) value of a number:

        echo(abs(-6.7) . "<br>"); // 6.7

        // PHP round() Function:
        //  The round() function rounds a floating-point number to the nearest integer:

        echo(round(0.60) . "<br>"); // 1
        echo(round(0.49) . "<br>"); // 0

        // PHP sqrt() Function:
        //  The sqrt() function returns the square root of a number:

        echo(sqrt(64) . "<br>"); // 8

        // PHP pow() Function:
        //  The pow() function returns the value of a number raised to the power of another number:

        echo(pow(2, 3) . "<br>"); // 8

        // PHP Random Number Generation
        //  The rand() function generates a random integer:

        echo(rand() . "<br>");
        // NOTE: To get more control over the random number, you can add the optional min and max parameters to specify the lowest integer and the highest integer to be returned.
        // For example, if you want a random integer between 10 and 100 (inclusive), use
        echo rand(10, 100) . "<br>";
    ?>
    
</body>
</html>