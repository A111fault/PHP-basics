<?php

// Check if either 'name' or 'age' is set in the POST parameters.
if(isset($_POST["name"]) || isset($_POST["age"])){
    // Check if the name contains characters other than alphabets, hyphens, and apostrophes.
    if(preg_match("/[^A-Za-z'-]/", $_POST['name'])){
        // If the name contains invalid characters, display an error message and terminate the script.
        die("Invalid name. Name should only contain alphabets");
    }
    // If the name is valid, display a greeting message with the name and age provided in the form.
    echo "Hello " . $_POST['name']. "<br/>";
    echo "Your age is " . $_POST['age']. "<br/>";

    exit(); // Exit the script after displaying the message.
}
?>
<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            Name: <input type="text" name="name" />
            Age: <input type="text" name="age" />
            <input type="submit" />
        </form>
    </body>
</html>
