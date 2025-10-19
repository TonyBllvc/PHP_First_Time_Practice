<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> __FUNCTION__ magic constant </title>
</head>
<body>

    <?php
      
      function myValue(){
        return __FUNCTION__;
      }
      echo myValue(); // Output: myValue
    ?>

</body>
</html>