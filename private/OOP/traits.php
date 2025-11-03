<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Traits</title>
</head>
<body>


    <?php

        // ___ PHP - What are Traits? ___
        // PHP only supports single inheritance: a child class can inherit only from one single parent.
        
        // So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.
         
        // Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).
         
        // Traits are declared with the trait keyword:

        trait TraitName {
            // some code...
        }

        // To use a trait in a class, use the use keyword:

        // Syntax
        
        class MyClass {
            use TraitName;
        }

        // Let's look at an example:

        // Example
    
        trait message1 {
            public function msg1() {
                echo "OOP is fun! ";
            }
        }
            
        class Welcome {
          use message1;
        }
        
        $obj = new Welcome();
        $obj->msg1();

        // Example Explained
        // Here, we declare one trait: message1. Then, we create a class: Welcome. The class uses the trait, and all the methods in the trait will be available in the class.

        // If other classes need to use the msg1() function, simply use the message1 trait in those classes. This reduces code duplication, because there is no need to redeclare the same method over and over again.

        // ___ PHP - Using Multiple Traits ____
        // Let's look at another example:

        // Example

        trait message2 {
          public function msg2() {
            echo "OOP is fun! ";
          }
        }

        trait message3 {
          public function msg3() {
            echo "OOP reduces code duplication!";
          }
        }

        class WelcomeOne {
          use message2;
        }

        class WelcomeTwo {
          use message2, message3;
        }

        $obj = new WelcomeOne();
        $obj->msg2();
        echo "<br>";

        $obj2 = new WelcomeTwo();
        $obj2->msg2();
        $obj2->msg3();

        // Example Explained
        // Here, we declare two traits: message1 and message2. Then, we create two classes: Welcome and Welcome2. The first class (Welcome) uses the message1 trait, and the second class (Welcome2) uses both message1 and message2 traits (multiple traits are separated by comma).

    ?>
    
</body>
</html>