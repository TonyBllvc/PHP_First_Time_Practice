<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Predefined Constants (magic constants)</title>
</head>
<body>

    <?php 
        
        /*
        PHP Predefined Constants

            PHP has nine predefined constants that change value depending on where they are used, also called the "magic constants".

            These magic constants are written with a double underscore at the start and the end, except for the ClassName::class constant.

            NOTE: The magic constants are case-insensitive, meaning __LINE__ returns the same as __line__.

            They are namely:

            constants                               Description
            __CLASS__                               The class name 
                                                    - If used inside a class, the class name is returned.

            __DIR__                                 The directory of the file
                                                    - If used inside a file, the directory of the file is returned.
                                                    
            __FILE__                                The full path and filename of the file
                                                    - If used inside a file, the full path and filename of the file is returned.

            __FUNCTION__                            The function name
                                                    - If used inside a function, the function name is returned.

            __LINE__                                The current line number
                                                    - The current line number is returned.

            __METHOD__                              The class method name
                                                    - If used inside a class method, the class method name is returned, meaning If used inside a function that belongs to a class, both class and function name is returned.

            __NAMESPACE__                           The namespace name
                                                    - If used inside a namespace, the namespace name is returned.

            __TRAIT__                               The trait name
                                                    - If used inside a trait, the trait name is returned.

            ClassName::class                        The fully qualified class name
                                                    - Returns the name of the specified class and the name of the namespace, if any. The fully qualified class name is returned.
        */

    ?>

</body>
</html>