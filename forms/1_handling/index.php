<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Form Handling </title>
</head>
<body>

    <!-- 
        Think SECURITY when processing PHP forms!

        This page does not contain any form validation, it just shows how you can send and retrieve form data.

        However, the next pages will show how to process PHP forms with security in mind! Proper validation of form data is important to protect your form from hackers and spammers!
    -->

    <form action="welcome_post.php" method="POST">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
    </form>

    <!-- 
        When the user fills out the form above and clicks the submit button, the form data is sent for processing to a PHP file named "welcome.php". The form data is sent with the HTTP POST method.

        To display the submitted data you could simply echo all the variables.

        The "welcome.php" looks like this:
    -->

    <!-- 
        The same result could also be achieved using the HTTP GET method:

        Example
        Same example, but the method is set to GET instead of POST:
    -->
    
    <form action="welcome_get.php" method="GET">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>

</body>
</html>