<?php
   
    // Check if either 'name' or 'age' is set in the URL parameters.
   if(isset($_GET["name"]) || isset($_GET["age"])){

    // Display a greeting with the name and the age provided in the URL.
    echo "hi". $_GET["name"]. "<br/>";
    echo "Your age is ". $_GET['age']. " years";
    exit(); // Exit the script after displaying the message.
   }

?>
<html>
    <body>
        <form action = "<?php $_PHP_SELF ?>" method = "GET">
        Name: <input type="text" name= "name" />
        Age: <input type="text" name= "age" />
        <input type= "submit" />    
    </form>

    </body>
</html>