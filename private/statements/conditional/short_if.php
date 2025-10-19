
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements </title>
</head>
<body>

    <?php 

        // Short Hand If
        // To write shorter code, you can write if statements on one line.

        // Example
        // One-line if statement:
        
        $a = 5;
        
        if ($a < 10) $b = "Hello";
        
        echo $b;
        

        // Short Hand If...Else | else known as "Ternary Operators", or "Conditional Expressions".
        // if...else statements can also be written in one line, but the syntax is a bit different.

        // Example
        // One-line if...else statement:
        
        $a = 13;
        
        $b = $a < 10 ? "Hello" : "Good Bye";
        
        echo $b;
    ?>


    
</body>
</html>