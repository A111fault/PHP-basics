<html>

<body>

    <?php
    // Defining a class named 'fruit' to represent fruits.
    // Member variables $name and $color will store the name and color of the fruit.
    // These variables are accessible within the class functions only.
    // Constructor: Initializes the object properties during object creation.
    // Destructor: This function is called when the object is no longer in use.

class fruit
{
    public $name;  // Public property to store the name of the fruit.
    public $color;  // Public property to store the color of the fruit.


     // Constructor method should be named __construct.
        // It initializes the name and color properties of the fruit.

    function __construct($name, $color)
    {
        $this->name = $name;  // Assigning the passed name to the object's 'name' property.
        $this->color = $color; // Assigning the passed color to the object's 'color' property.
    }

    // Method to retrieve the name of the fruit.
    function get_name()
    {
        return $this->name; // Returning the value of the 'name' property.
    }

    // Returning the value of the 'name' property.
    function get_color()
    {
        return $this->color;
    }
}

// Creating an instance of the fruit class called 'strawberry'.
// Passing "Strawberry" as the name and "Pink" as the color to the constructor.
$strawberry = new fruit("Strawberry", "Pink");

// Outputting the name of the strawberry fruit using the get_name() method.
echo $strawberry->get_name();

echo "<br>"; // HTML line break for formatting.

// Outputting the color of the strawberry fruit using the get_color() method.
echo $strawberry->get_color();





    ?>
</body>

</html>