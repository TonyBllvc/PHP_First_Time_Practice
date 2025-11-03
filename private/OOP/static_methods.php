<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Static Methods</title>
</head>
<body>

    <?php

        // ___ PHP - Static Methods ___
        // Static methods can be called directly - without creating an instance of the class first.

        // Static methods are called using the class name directly, avoiding the need to create an unnecessary instance of the class

        // Static methods are declared with the static keyword:

        class ClassName {
            public static function staticMethod() {
              echo "Hello World!";
            }
          }

        //   To access a static method use the class name, double colon (::), and the method name:

        // Syntax:
        ClassName::staticMethod();

        // Let's look at an example:

        // Example
        
        class greeting {
          public static function welcome() {
            echo "Hello World!";
          }
        }

        // Call static method
        greeting::welcome();

        // Example Explained
        
        // Here, we declare a static method: welcome(). Then, we call the static method by using the class name, double colon (::), and the method name (without creating an instance of the class first).

        // ___ PHP - More on Static Methods ___
        // A class can have both static and non-static methods. A static method can be accessed from a method in the same class using the self keyword and double colon (::):

        class greeting_two {
            public static function welcome_two() {
              echo "Hello World!";
            }
          
            public function __construct() {
              self::welcome_two();
            }
          }
          
          new greeting_two();

        //   Static methods can also be called from methods in other classes. To do this, the static method should be public:

        // Example

        class A {
          public static function welcome() {
            echo "Hello World!";
          }
        }

        class B {
          public function message() {
            A::welcome();
          }
        }

        $obj = new B();
        echo $obj->message();

        // To call a static method from a child class, use the parent keyword inside the child class. Here, the static method can be public or protected.

        // Example
        
        class domain {
          protected static function getWebsiteName() {
            return "W3Schools.com";
          }
        }

        class domainW3 extends domain {
          public $websiteName;
          public function __construct() {
            $this->websiteName = parent::getWebsiteName();
          }
        }

        $domainW3 = new domainW3;
        echo $domainW3->websiteName;
    ?>
    
</body>
</html>