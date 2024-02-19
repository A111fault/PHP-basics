<?php

// Check if either 'name' or 'age' is set in the request parameters.
if (isset($_REQUEST["name"]) || isset($_POST["age"])) {
    // Display a greeting with the name and the age provided in the request.
    echo "Hi " . $_REQUEST['name'] . "<br/>";
    echo "Your age is " . $_REQUEST['age'] . " years";
    exit();  // Exit the script after displaying the message.
}

?>
<html>

<body>
    <form action="<?php $_PHP_SELF ?>" method="POST">
        Name: <input type="text" name="name" />
        Age: <input type="text" name="age" />
        <input type="submit" />
    </form>
</body>

</html>