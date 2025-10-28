
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operators</title>
</head>
<body>
    
    <?php

        /*
            PHP Operators
            Operators are used to perform operations on variables and values.

            PHP divides the operators in the following groups:

            Arithmetic operators
            Assignment operators
            Comparison operators
            Increment/Decrement operators
            Logical operators
            String operators
            Array operators
            Conditional assignment operators

            others: 
            The object operator,[ -> ]
            -- , is used in object scope to access methods and properties of an object. It's meaning is to say that what is on the right of the operator is a member of the object instantiated into the variable on the left side of the operator. Instantiated is the key term here.

            The Scope Resolution Operator (also called Paamayim Nekudotayim) or in simpler terms, the double colon,[ :: ]
            --  is a token that allows access to a constant, static property, or static method of a class or one of its parents.

            .. For the others, continue in others.php ..
        */

            // ***** PHP Arithmetic Operators *****
            // The PHP arithmetic operators are used with numeric values to perform common arithmetical operations, such as addition, subtraction, multiplication etc.

            $x = 10;
            $y = 20;

            echo "Arithmetic Operators"  . "<br />";
            // Addition - Sum of $x and $y
            echo $x + $y; // Outputs: 30
            echo "<br />";

            // Subtraction - Difference of $x and $y
            echo $x - $y; // Outputs: -10
            echo "<br />";

            // Multiplication - Product of $x and $y
            echo $x * $y; // Outputs: 200
            echo "<br />";

            // Division - Quotient of $x and $y
            echo $x / $y; // Outputs: 0.5
            echo "<br />";

            // Modulus - Remainder of $x divided by $y
            echo $x % $y; // Outputs: 10
            echo "<br />";

            // Exponentiation - $x raised to the power of 2
            echo $x ** 2; // Outputs: 100
            echo "<br />";


            // ***** PHP Assignment Operators *****
            // The PHP assignment operators are used with numeric values to write a value to a variable.
            
            // The basic assignment operator in PHP is "=". It means that the left operand gets set to the value of the assignment expression on the right.

            $xa = 1;
            $ya = 2;

            // assignment               same as                         description
            // x = y                    x = y                           x = y    
            // x += y                   x = x + y                       x = x + y
            // x -= y                   x = x - y                       x = x - y
            // x *= y                   x = x * y                       x = x * y
            // x /= y                   x = x / y                       x = x / y
            // x %= y                   x = x % y                       x = x % y
            // x **= y                  x = x ** y                      x = x ** y



            // ***** PHP Comparison Operators *****
            // The PHP comparison operators are used to compare two values (number or string):

            // operator                 name                        example             result
            // ==                       Equal to                    $a == $b
            // ===                      Identical to                $a === $b
            // !=                       Not equal to                $a != $b
            // <>                       Not equal to                $a <> $b
            // !==                      Not identical to            $a !== $b
            // >                        Greater than                $a > $b
            // <                        Less than                   $a < $b
            // >=                       Greater than or equal to    $a >= $b
            // <=                       Less than or equal to       $a <= $b
            // <=>                      Spaceship                   $a <=> $b

            // Examples:
            echo "Comparison Operators" . "<br />" . "==" . " ";
            $xb = 10;
            $yb = "10";

            var_dump($xb == $yb); // Outputs: Returns true if $x is equal to $y, without checking data types
            echo "<br />" . "===" . " ";

            var_dump($xb === $yb); // Outputs: Returns true if $x is equal to $y, and they are of the same data type
            echo "<br />" . "!=" . " ";

            var_dump($xb != $yb); // Outputs: Returns true if $x is not equal to $y, without checking data types
            echo "<br />" . "<>" . " ";
            
            var_dump($xb <> $yb); // Outputs: Returns true if $x is not equal to $y, without checking data types
            echo "<br />" . "!==" . " ";

            var_dump($xb !== $yb); // Outputs: Returns true if $x is not equal to $y, and they are not of the same data type
            echo "<br />" . ">" . " ";
            
            var_dump($xb > $yb); // Outputs: Returns true if $x is greater than $y
            echo "<br />" . "<" . " ";
            
            var_dump($xb < $yb); // Outputs: Returns true if $x is less than $y
            echo "<br />" . ">=" . " ";
            
            var_dump($xb >= $yb); // Outputs: Returns true if $x is greater than or equal to $y
            echo "<br />" . "<=" . " ";
            
            var_dump($xb <= $yb); // Outputs: Returns true if $x is less than or equal to $y
            echo "<br />" . "<=>" . " ";
            
            var_dump($xb <=> $yb); // Outputs: Returns 0 if $x is equal to $y, 1 if $x is greater than $y, and -1 if $x is less than $y, without checking data types
            echo "<br />";


            // ***** PHP Increment/Decrement Operators *****
            // The PHP increment operators are used to increment a variable's value.

            // The PHP decrement operators are used to decrement a variable's value.

            // operator                 same as..                   description     
            // ++$xc                    Pre-increment               Increments $xc by one, then returns $xc
            // $Xc++                    Post-increment              Returns $x, then increments $x by one 
            // --$x                     Pre-decrement               Decrements $x by one, then returns $x
            // $x--                     Post-decrement              Returns $x, then decrements $x by one
            
            echo "<br /> Increment / Decrement Operators" . "<br />";
            $x1 = 10;  
            echo ++$x1 . " | " . "Pre-increment	Increments $x by one, then returns $x" . "<br />"; 
            echo $x1 . "<br />";
            
            $x1 = 10;  
            echo $x1++ . " | " . "Post-increment	Returns $x, then increments $x by one" . "<br />";
            echo $x1 . "<br />";

            $x1 = 10;  
            echo --$x1 . " | " . "Pre-decrement	Decrements $x by one, then returns $x" . "<br />";
            echo $x1 . "<br />";

            $x1 = 10;  
            echo $x1-- . " | " . "Post-decrement	Returns $x, then decrements $x by one" . "<br />";
            echo $x1 . "<br />";


            // ***** PHP Logical Operators *****
            // The PHP logical operators are used to combine conditional statements.

            // Operator     Name   Example      Result
            // and          And    $x and $y    True if both $x and $y are true
            // or           Or     $x or $y     True if either $x or $y are true
            // xor          Xor    $x xor $y    True if both $x or $y are true
            // &&           And    $x && $y     True if both $x and $y are true
            // ||           Or     $x || $y     True if both $x and $y are true
            // !            Not    !$x          True if $x is not true

            $x2 = true;
            $y2 = true;
            $z2 = false;
            $xy = false;
            
            echo "<br /> Logical Operators" . "<br />";
            
            echo "Note: The 'and' and 'or' operators have a lower precedence than the && and || operators." . "<br />";
            echo "This means that in complex expressions, && and || are evaluated before and and or." . "<br /> <br />";

            echo "true and true = ";
            var_dump($x2 and $y2); // Outputs: true
            echo "<br /> true and false = ";
            var_dump($x2 and $z2); // Outputs: false
            echo "<br /> false and false = ";
            var_dump($z2 and $xy); // Outputs: false
            echo "<br />";

            echo "<br /> true or true = ";
            var_dump($x2 or $y2); // Outputs: true
            echo "<br /> true or false = ";
            var_dump($x2 or $z2); // Outputs: true
            echo "<br /> false or false = ";
            var_dump($z2 or $xy); // Outputs: false
            echo "<br />";

            echo "<br /> true xor true = ";
            var_dump($x2 xor $y2); // Outputs: false
            echo "<br /> true xor false = ";
            var_dump($x2 xor $z2); // Outputs: true
            echo "<br /> false xor false = ";
            var_dump($z2 xor $xy); // Outputs: true
            echo "<br />";

            echo "<br /> true && true = ";
            var_dump($x2 && $y2); // Outputs: true
            echo "<br /> true && false = ";
            var_dump($x2 && $z2); // Outputs: false
            echo "<br /> false && false = ";
            var_dump($z2 && $xy); // Outputs: false
            echo "<br />";

            echo "<br /> true || true = ";
            var_dump($x2 || $y2); // Outputs: true
            echo "<br /> true || false = ";
            var_dump($x2 || $z2); // Outputs: true
            echo "<br /> false || false = ";
            var_dump($z2 || $xy); // Outputs: false
            echo "<br />";

            echo "<br /> not true = ";
            var_dump(!$x2); // Outputs: false
            echo "<br /> not false = ";
            var_dump(!$z2); // Outputs: true
            echo "<br />";
            echo "<br />";


            // ***** PHP String Operators *****
            // PHP has two operators that are specially designed for strings.

            // Operator	 Name	        Example	        Result	
            // .	     Concatenation	$txt1 . $txt2	Concatenation of $txt1 and $txt2
            // .=	     Concatenation assignment	$txt1 .= $txt2	Appends $txt2 to $txt1

            echo "String Operators" . "<br />";
            $txt1 = "Hello";
            $txt2 = " world!";
            echo $txt1 . $txt2 . " Concatenation"; // Concatenation of $txt1 and $txt2

            echo "<br />";
            $txt1 = "Hello";
            $txt2 = " world!";
            echo $txt1 .= $txt2 . " Concatenation assignment <br /> <br />"; // Appends $txt2 to $txt1


            // ***** PHP Array Operators *****
            // The PHP array operators are used to compare arrays.
            
            // Operator	|  Name	        | Example	 |  Result	
            // +	    |  Union	    | $x + $y	 |  Union of $x and $y	
            // ==	    |  Equality	    | $x == $y	 |  Returns true if $x and $y have the same key/value pairs	
            // ===	    |  Identity	    | $x === $y	 |  Returns true if $x and $y have the same key/value pairs in the same order and of the same types	
            // !=	    |  Inequality	| $x != $y	 |  Returns true if $x is not equal to $y	
            // <>	    |  Inequality	| $x <> $y	 |  Returns true if $x is not equal to $y	
            // !==	    |  Non-identity	| $x !== $y	 |  Returns true if $x is not identical to $y

            
            $x = array("a" => "red", "b" => "green");  
            $y = array("c" => "blue", "d" => "yellow");  

            print_r($x + $y); // union of $x and $y
            echo "| Union of \$x + \$y" . "<br />"; // Array ( [a] => red [b] => green [c] => blue [d] => yellow ) 

            var_dump($x == $y);
            echo "| Equality of \$x == \$y" . "<br />"; // false

            var_dump($x === $y);
            echo "| Identity of \$x === \$y" . "<br />"; // false


            var_dump($x != $y);
            echo "| Inequality of \$x != \$y" . "<br />"; // true

            var_dump($x <> $y);
            echo "| Inequality of \$x <> \$y" . "<br />"; // true

            var_dump($x !== $y);
            echo "| Non-identity of \$x !== \$y" . "<br />"; // true

            // PHP Conditional Assignment Operators
            // The PHP conditional assignment operators are used to set a value depending on conditions:
            // 
            // Operator	    |  Name	            | Example	                    | Result	
            // ?:	        |  Ternary	        | $x = expr1 ? expr2 : expr3	| Returns the value of $x.
            //                                                                  | The value of $x is expr2 if expr1 = TRUE.
            //                                                                  | The value of $x is expr3 if expr1 = FALSE.

            // ??	        |  Null coalescing	| $x = expr1 ?? expr2	        | Returns the value of $x.
            //                                                                  | The value of $x is expr1 if expr1 exists, and is not NULL.
            //                                                                  | If expr1 does not exist, or is NULL, the value of $x is expr2.
            //                                                                  | Introduced in PHP 7
            
            // Example with Ternary 
            // if empty($user) = TRUE, set $status = "anonymous"
            echo $status = (empty($user)) ? "anonymous" : "logged in";
            echo("<br>");
         
            $user = "John Doe";
            // if empty($user) = FALSE, set $status = "logged in"
            echo $status = (empty($user)) ? "anonymous" : "logged in";


            ?> 
</body>
</html>