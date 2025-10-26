<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP public keyword</title>
</head>
<body>

    <?php

        // Definition and Usage
        // The public keyword is an access modifier. It marks a property or method as public.
        // 
        // Public properties and methods can be used by any code that can access the object.

        class MyClass {
          public $number = 0;
        }
        
        $obj = new MyClass();
        $obj->number = 5;
        echo "The number is " . $obj->number;


    ?>
    
</body>
</html>