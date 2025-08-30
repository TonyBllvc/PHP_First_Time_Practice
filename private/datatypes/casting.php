<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data type Casting </title>
</head>
<body>
    
    <?php
      /*
        -Casting in PHP is done with these statements:

            i: (string) - Converts to data type String
            ii: (int) - Converts to data type Integer
            iii: (float) - Converts to data type Float
            iv: (bool) - Converts to data type Boolean
            v: (array) - Converts to data type Array
            vi: (object) - Converts to data type Object
            vii: (unset) - Converts to data type NULL (deprecated)

      */

            // Cast to String
            // NOTE: To cast to string, use the (string) statement:
            $a = 5;       // Integer
            $b = 5.34;    // Float
            $c = "hello"; // String
            $d = true;    // Boolean
            $e = NULL;    // NULL

            $a = (string) $a;
            $b = (string) $b;
            $c = (string) $c;
            $d = (string) $d;
            $e = (string) $e;

            echo "<br /> casting to string: <br />";

            //To verify the type of any object in PHP, use the var_dump() function:
            var_dump($a); // string(1) "5"
            var_dump($b); // string(4) "5.34"
            var_dump($c); // string(5) "hello"
            var_dump($d); // string(1) "1"
            var_dump($e); // string(0) ""


            // Cast to Integer
            // NOTE: To cast to integer, use the (int) statement:
            $az = 5;       // Integer
            $bz = 5.34;    // Float
            $cz = "25 kilometers"; // String
            $dz = "kilometers 25"; // String
            $ez = "hello"; // String
            $fz = true;    // Boolean
            $gz = NULL;    // NULL

            $az = (int) $az;
            $bz = (int) $bz;
            $cz = (int) $cz;
            $dz = (int) $dz;
            $ez = (int) $ez;
            $fz = (int) $fz;
            $gz = (int) $gz;
            
            echo "<br /> casting to integer: <br />";

            var_dump($gz); // int(0)
            var_dump($fz); // int(1)
            var_dump($az); // int(5)
            var_dump($bz); // int(5)
            var_dump($cz); // int(25)
            var_dump($dz); // int(0)
            var_dump($ez); // int(0)
            var_dump($fz); // int(1)
            var_dump($gz); // int(0)

            // Cast to Float
            // NOTE: To cast to float, use the (float) statement:
            $ay = 5;       // Integer
            $by = 5.34;    // Float
            $cy = "25 kilometers"; // String
            $dy = "kilometers 25"; // String
            $ey = "hello"; // String
            $fy = true;    // Boolean
            $gy = NULL;    // NULL
                        
            $ay = (float) $ay;
            $by = (float) $by;
            $cy = (float) $cy;
            $dy = (float) $dy;
            $ey = (float) $ey;
            $fy = (float) $fy;
            $gy = (float) $gy;

            echo "<br /> casting to float: <br />";

            var_dump($ay); // float(5)
            var_dump($by); // float(5.34)
            var_dump($cy); // float(25)
            var_dump($dy); // float(0)
            var_dump($ey); // float(0)
            var_dump($fy); // float(1)
            var_dump($gy); // float(0);

            // Cast to Boolean
            // NOTE: To cast to boolean, use the (bool) statement:
            $ax = 5;       // Integer
            $bx = 5.34;    // Float
            $cx = 0;       // Integer
            $dx = -1;      // Integer
            $ex = 0.1;     // Float
            $fx = "hello"; // String
            $gx = "";      // String
            $hx = true;    // Boolean
            $ix = NULL;    // NULL

            $ax = (bool) $ax;
            $bx = (bool) $bx;
            $cx = (bool) $cx;
            $dx = (bool) $dx;
            $ex = (bool) $ex;
            $fx = (bool) $fx;
            $gx = (bool) $gx;
            $hx = (bool) $hx;
            $ix = (bool) $ix;

            echo "<br /> casting to boolean: <br />";

            var_dump($ax); // bool(true)
            var_dump($bx); // bool(true)
            var_dump($cx); // bool(false)
            var_dump($dx); // bool(true)
            var_dump($ex); // bool(true)
            var_dump($fx); // bool(true)
            var_dump($gx); // bool(false)
            var_dump($hx); // bool(true)
            var_dump($ix); // bool(false)

            // If a value is 0, NULL, false, or empty, the (bool) converts it into false, otherwise true.
            // Even -1 converts to true.

            // Cast to Array
            // NOTE: To cast to array, use the (array) statement:
            $aq = 5;       // Integer
            $bq = 5.34;    // Float
            $cq = "hello"; // String
            $dq = true;    // Boolean
            $eq = NULL;    // NULL

            $aq = (array) $aq;
            $bq = (array) $bq;
            $cq = (array) $cq;
            $dq = (array) $dq;
            $eq = (array) $eq;

            /* 
                - When converting into arrays, most data types converts into an indexed array with one element.
                - NULL values converts to an empty array object.
                - Objects converts into associative arrays where the property names becomes the keys and the property values becomes the values:
             */
            // Converting Objects into Arrays:
            class Car {
                public $color;
                public $model;
                public function __construct($color, $model) {
                  $this->color = $color;
                  $this->model = $model;
                }
                
                public function message() {
                  return "My car is a " . $this->color . " " . $this->model . "!";
                }
              }
              
              $myCar = new Car("red", "Volvo");
              // echo "<br />";
              // var_dump($myCar->message());

              $myCar = (array) $myCar;
              
            echo "<br /> casting to array: ";
            
            var_dump($aq); // array(1) { [0]=> int(5) }
            var_dump($bq); // array(1) { [0]=> float(5.34) }
            var_dump($cq); // array(1) { [0]=> string(5) "hello" }
            var_dump($dq); // array(1) { [0]=> bool(true) }
            var_dump($eq); // array(0) { }
            var_dump($myCar); // array(2) { ["color"]=> string(3) "red" ["model"]=> string(5) "Volvo" }

            //   Cast to Object
            // NOTE: To cast to object, use the (object) statement:
            $av = 5;       // Integer
            $bv = 5.34;    // Float
            $cv = "hello"; // String
            $dv = true;    // Boolean
            $ev = NULL;    // NULL

            $av = (object) $av;
            $bv = (object) $bv;
            $cv = (object) $cv;
            $dv = (object) $dv;
            $ev = (object) $ev;

            /*
                - When converting into objects, most data types converts into a object with one property, named "scalar", with the corresponding value.

                - NULL values converts to an empty object.

                - Indexed arrays converts into objects with the index number as property name and the value as property value.

                - Associative arrays converts into objects with the keys as property names and values as property values.
            */

                // Converting Arrays into Objects:
                $axy = array("Volvo", "BMW", "Toyota"); // indexed array
                $bxy = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // associative array

                $axy = (object) $axy;
                $bxy = (object) $bxy;

            echo "<br /> casting to object: <br />";
            var_dump($axv);
            var_dump($bxv);
            var_dump($cv);
            var_dump($dv);
            var_dump($ev);
            var_dump($axy);
            var_dump($bxy);

            // Cast to NULL(verify this part of this code as 'unset' is deprecated)
            // NOTE: To cast to NULL, use the (unset) statement:
            $a = 5;       // Integer
            $b = 5.34;    // Float
            $c = "hello"; // String
            $d = true;    // Boolean
            $e = NULL;    // NULL

            // $a = (unset) $a; 
            // $b = (unset) $b;
            // $c = (unset) $c;
            // $d = (unset) $d;
            // $e = (unset) $e;
    ?>

</body>
</html>