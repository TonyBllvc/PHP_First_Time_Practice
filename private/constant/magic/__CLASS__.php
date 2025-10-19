<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> __CLASS__ magic constant </title>
</head>
<body>

    <?php
        class MyClass {
            public function myMethod() {
                echo __CLASS__;
            }
        }

        $obj = new MyClass();
        $obj->myMethod(); // Outputs: MyClass
    ?>

</body>
</html>