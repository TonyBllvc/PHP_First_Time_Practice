<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check for match</title>
</head>
<body>
    
    <?php
    
    $string = "The quick brown fox jumps over the lazy dog.";
    $pattern = "/quick/";
    
    if (preg_match($pattern, $string)) {
        echo "Pattern 'quick' found in the string.";
    } else {
        echo "Pattern 'quick' not found.";
    }
    
    
    
    echo "<br />";
    echo "<br />";
    // Example with capturing groups
    $pattern_with_groups = "/(quick) (brown)/";
    if (preg_match($pattern_with_groups, $string, $matches)) {
        echo "\nFull match: " . $matches[0];
        echo "<br />";
        echo "\nFirst group: " . $matches[1];
        echo "<br />";
        echo "\nSecond group: " . $matches[2];
    }
    
    /**
     __ Definition and Usage __
        - The preg_match() function returns whether a match was found in a string.

        ## Syntax
         preg_match(pattern, input, matches, flags, offset)
        
        __  Parameter Values
        Parameter	Description
        pattern	    Required. Contains a regular expression indicating what to search for
        input	    Required. The string in which the search will be performed
        matches	    Optional. The variable used in this parameter will be populated with an array containing all of the matches that were found
        flags	    Optional. A set of options that change how the matches array is structured:
                        PREG_OFFSET_CAPTURE - When this option is enabled, each match, instead of being a string, will be an array where the first element is a substring containing the match and the second element is the position of the first character of the substring in the input.
                        PREG_UNMATCHED_AS_NULL - When this option is enabled, unmatched subpatterns will be returned as NULL instead of as an empty string.
        offset	    Optional. Defaults to 0. Indicates how far into the string to begin searching. The preg_match() function will not find matches that occur before the position given in this parameter
     **/
    ?>
</body>
</html>