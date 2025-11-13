<?php

    /**
    
    The isset() function in PHP is a language construct used to determine if a variable is declared and has a value other than NULL. It returns a boolean value: true if the variable is considered "set", and false otherwise. 
    Here's a breakdown of its behavior:
    Returns true if:
    The variable has been declared.
    The variable has been assigned a value, even if that value is 0, false, an empty string (""), or an empty array ([]).
    Returns false if:
    The variable has not been declared.
    The variable has been explicitly assigned the value NULL.
    The variable has been "unset" using the unset() function.
     * 
     */
    $myVar = "Hello";
    $anotherVar = NULL;
    $yetAnotherVar; // Declared but not assigned
    
    echo isset($myVar) ? "myVar is set" : "myVar is not set"; // Output: myVar is set
    echo "\n";
    echo isset($anotherVar) ? "anotherVar is set" : "anotherVar is not set"; // Output: anotherVar is not set
    echo "\n";
    echo isset($yetAnotherVar) ? "yetAnotherVar is set" : "yetAnotherVar is not set"; // Output: yetAnotherVar is not set
    echo "\n";
    
    unset($myVar);
    echo isset($myVar) ? "myVar is set" : "myVar is not set"; // Output: myVar is not set
    
?>