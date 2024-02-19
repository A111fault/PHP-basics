<html>
<body>
    <?php
    // Defining a class named 'fruit' to represent fruits.
    class fruit
    {
        public $name; // Public property to store the name of the fruit.
        public $color;  // Public property to store the color of the fruit.
    
        // Constructor to initialize the name and color properties of the fruit.
        function __construct($name, $color)
        {
            $this->name = $name;  // Assigning the passed name to the object's 'name' property.
            $this->color = $color; // Assigning the passed color to the object's 'color' property.
        }
        // Method to introduce the fruit, displaying its name and color.
        public function intro(){
            echo "A {$this->name} is a fruit and the color of the fruit is {$this->color}.";
        }
    }

    // Defining a class named 'Cherry' which extends the 'fruit' class.
    class Cherry extends fruit{
        // Method to display a message specific to cherries.
        public function message(){
            echo "Is cherry a fruit or a berry?";
        }
    }
    
    // Correct instantiation of Cherry class
    // Creating an instance of the 'Cherry' class called '$cherry'.
    // Passing "Cherry" as the name and "red" as the color to the constructor.
    $cherry = new Cherry("Cherry", "red");

    // Calling the 'message()' method of the '$cherry' object.
    $cherry->message();

    // Calling the 'intro()' method of the '$cherry' object.
    $cherry->intro();
    ?>
</body>
</html>
