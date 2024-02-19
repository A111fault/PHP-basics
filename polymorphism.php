<html>
<body>
    <?php
    // Defining a class named 'fruit' to represent fruits.
    class fruit
    {
        public $name; // Public property to store the name of the fruit.
        public $color; // Public property to store the color of the fruit.
        
        // Constructor to initialize the name and color properties of the fruit.
        function __construct($name, $color)
        {
            $this->name = $name; // Assigning the passed name to the object's 'name' property.
            $this->color = $color; // Assigning the passed color to the object's 'color' property.
        }
        
        // Method to introduce the fruit, displaying its name and color.
        public function intro()
        {
            echo "A {$this->name} is a fruit and the color of the fruit is {$this->color}.";
        }
    }
    
    // Defining a class named 'Cherry' which extends the 'fruit' class.
    class Cherry extends fruit
    {
        public $weight; // Public property to store the weight of the cherry.
    
        public function __construct($name, $color, $weight)
        {
            parent::__construct($name, $color); // Calling the constructor of the parent class 'fruit'.
            $this->weight = $weight;  // Assigning the passed weight to the object's 'weight' property.
        }
        
        // Method to introduce the cherry, displaying its name, color, and weight.
        public function intro()
        {
            echo "This fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
        }
    }
    
    // Creating an instance of the 'Cherry' class called '$cherry'.
    // Passing "Cherry" as the name, "bright pink" as the color, and 20 as the weight to the constructor.
    $cherry = new Cherry("Cherry", "bright pink", 20);

    // Calling the 'intro()' method of the '$cherry' object to introduce the cherry.
    $cherry->intro();
    
    ?>
</body>
</html>
