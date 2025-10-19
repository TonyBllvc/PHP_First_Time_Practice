<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Arguments</title>
</head>
<body>


    <?php


        // PHP Default Argument Value
        // The following example shows how to use a default parameter. If we call the function setHeight() without arguments it takes the default value as argument:
        
        // Example
        
        function setHeight($minheight = 50) {
          echo "The height is : $minheight <br>";
        }
        
        setHeight(350);
        setHeight(); // will use the default value of 50
        setHeight(135);
        setHeight(80);


    ?>
    
</body>
</html>