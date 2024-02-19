<html>
<body>
    <?php
    // Defining a class named 'fruit' to represent fruits.
    // Member variables $name and $color will store the name and color of the fruit.
    // Constructor: Initializes the object properties during object creation.
    // Destructor: This function is called when the object is no longer in use.

    class fruit
    {
        public $name;  // Public property to store the name of the fruit.
        public $color; // Public property to store the color of the fruit.
    
        
        // Constructor method should be named __construct.
        // It initializes the name and color properties of the fruit.
        function __construct($name, $color)
        {
            $this->name = $name;  // Assigning the passed name to the object's 'name' property.
            $this->color = $color; // Assigning the passed color to the object's 'color' property.
        }
        
        // Destructor method, which is automatically called when the object is destroyed.
        // Outputs a message indicating the name and color of the fruit being destroyed.
        function __destruct(){
            echo "The fruit is {$this->name} and the color is {$this->color}.";
        }
    }
    

    // Creating an instance of the fruit class called 'strawberry'.
    // Passing "Strawberry" as the name and "Pink" as the color to the constructor.
    $strawberry = new fruit("Strawberry", "Pink");
    
    ?>
</body>
</html>