<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> __METHOD__ magic constant </title>
</head>
<body>

    <?php
        class Fruits {
          public function myValue(){
            return __METHOD__;
          }
        }
        $kiwi = new Fruits();
        echo $kiwi->myValue(); // Outputs: Fruits::myValue
    ?>

</body>
</html>