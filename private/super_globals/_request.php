<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

        // $_REQUEST
        // $_REQUEST is a PHP super global variable which contains submitted form data, and all cookie data.
        // 
        // In other words, $_REQUEST is an array containing data from $_GET, $_POST, and $_COOKIE.
        // 
        // You can access this data with the $_REQUEST keyword followed by the name of the form field, or cookie, like this:
        // 
        // $_REQUEST['first_name'];


        // Now, sing $_REQUEST on $_POST Requests
        // POST request are usually data submitted from an HTML form.

        // Here is an example of how a HTML form could look like:
        
        // ___  HTML form _______
        // <html>
        // <body>
        
        // <form method="post" action="demo_request.php">
        //   Name: <input type="text" name="fname">
        //   <input type="submit">
        // </form>

        // ____ HTML End _____
        
        // </body>
        // </html>
        // When a user clicks the submit button, the form data is sent to a PHP file specified in the action attribute of the <form> tag.
        
        // In the action file we can use the $_REQUEST variable to collect the value of the input field.
        
        // PHP file
        
        // $name = $_REQUEST['fname'];
        // echo $name;
        // In the example below we have put the HTML form and PHP code in the same PHP file.
        
        // We have also added some extra lines for security.

        
        // Using $_REQUEST on $_POST Requests
        // live example
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // echo $_SERVER['PHP_SELF'] . "<br />"; // Gets the filename of the currently executing script
            // echo $_SERVER["REQUEST_METHOD"] . "<br />"; // Gets the request method type
            $name = htmlspecialchars($_REQUEST['fname']); // Collects the value of the input field and sanitizes it
            if (empty($name)) {
              echo "Name is empty";
            } else {
              echo $name;
            }
          }

          // Using $_REQUEST on $_GET Requests
          // GET request can be form submissions as in the example above, with the method attribute of the HTML <form> element set to GET.

          // GET requests can also be data from a query string (information added after a URL address).

          // Here is an example of how an HTML hyperlink, with a query string could look like:

    ?>

    <!-- live example -->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      Name: <input type="text" name="fname">
      <input type="submit">
    </form>
    
    
    <a href="demo_phpfile.php?subject=PHP&web=W3schools.com">Test $GET</a>
            
            
    <!--         
    <form method="post" action="demo_request.php">
      Name: <input type="text" name="fname">
      <input type="submit">
    </form> -->
        
</body>
</html>