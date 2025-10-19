<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> __TRAIT__ magic constant </title>
</head>
<body>


    <?php
        trait message1 {
          public function msg1() {
            echo __TRAIT__; 
          }
        }

        class Welcome {
          use message1;
        }

        $obj = new Welcome();
        $obj->msg1(); // Outputs: message1
    ?>
</body>
</html>