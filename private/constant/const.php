<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Const constants </title>
</head>
<body>

    <?php 
        /*
            PHP Const Keyword
            You can also create a constant by using the const keyword.

            Definition and Usage:
                The const keyword is used to create constants. Unlike with the define() function, constants created using the const keyword must be declared in the global scope.
        */

            // Example One:
                const MY_CONSTANT = 5;
                echo MY_CONSTANT . "<br />";
                
            // Example Two:
            
                class MyClass {
                  const MY_CONSTANT = 5;
                }

                echo MyClass::MY_CONSTANT;
    ?>


</body>
</html>