<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Filter</title>
</head>
<body>
    
    <?php 

    /**
        - The filter_var() function in PHP is a built-in function used for both validating and sanitizing data. It takes a variable and a specified filter as arguments, applying the filter to the variable and returning the filtered result.
        Syntax:
        
            Code ___

            filter_var(mixed $variable, int $filter = FILTER_DEFAULT, mixed $options = null): mixed|false

            END__
        
        Parameters:
            - $variable: The variable to filter.
            - $filter: The ID of the filter to apply. This can be a validation filter (e.g., 
            - FILTER_VALIDATE_EMAIL, FILTER_VALIDATE_INT, FILTER_VALIDATE_URL) or a sanitization filter (e.g., FILTER_SANITIZE_EMAIL, FILTER_SANITIZE_NUMBER_INT, 
            - FILTER_SANITIZE_SPECIAL_CHARS).
            - $options: An associative array or a bitwise OR of flags to fine-tune the filter's behavior.

        Return Value:
            - On success, filter_var() returns the filtered data.
            - On failure, it returns false, unless the FILTER_NULL_ON_FAILURE flag is used, in which case it returns null. 
        
        Examples:
        1. Email Validation:
        
            Code___ 
            
    **/

            $email = "test@example.com";
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Email is valid.";
            } else {
                echo "Email is invalid.";
            }
            
    /**
            END__
            
              
        2. Integer Sanitization:
            Code__
            
    **/

            $input = "123abc456";
            $sanitized_int = filter_var($input, FILTER_SANITIZE_NUMBER_INT);
            echo "Sanitized integer: " . $sanitized_int; // Output: 123456

    /**
        
            END__
        3. URL Validation with Flags:
        
        Code__
    **/

        $url = "http://www.example.com/path?query=value";
        if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED)) {
            echo "URL is valid and includes path and query.";
        } else {
            echo "URL is invalid.";
        }

    /**
        END__

        filter_var() is a powerful tool for handling user input and ensuring data integrity in PHP applications.

    **/

    ?>
</body>
</html>