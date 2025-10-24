<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

        // PHP $_POST
        // $_POST contains an array of variables received via the HTTP POST method.
         
        // There are two main ways to send variables via the HTTP Post method:
        
        // -- HTML forms
        // -- JavaScript HTTP requests


        // $_POST in HTML Forms
        // A HTML form submits information via the HTTP POST method if the form's method attribute is set to "POST".
        
        // To demonstrate this, we start by creating a simple HTML form:
            
        // ___  HTML form _______

        // <form method="POST" action="demo_request.php">
        //   Name: <input type="text" name="fname">
        //   <input type="submit">
        // </form>

        // ____ HTML End _____ 

        // When a user clicks the submit button, the form data is sent to a PHP file specified in the action attribute of the <form> tag.

        // In the action file we can use the $_POST variable to collect the value of the input field.

        // $name = $_POST['fname'];
        // echo $name;

        // Using $_POST in HTML Forms
        // live example
        // In the example below we have put the HTML form and PHP code in the same PHP file.

        // We have also added some extra lines for security.
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['fname']);
            if (empty($name)) {
              echo "Name is empty";
            } else {
              echo $name;
            }
          }
          

        // **** $_POST in JavaScript HTTP Requests ****
        // When sending a HTTP request in JavaScript, you can specify that the HTTP method is POST.

        // To demonstrate this we start by creating a JavaScript function containing a HTTP request:
       
        // ... continue this in: https://www.w3schools.com/php/php_superglobals_post.asp 
    ?>

    <!-- Live examples -->
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
      Name: <input type="text" name="fname">
      <input type="submit">
    </form>
    


</body>
</html>