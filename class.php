<html>

<body>
<h1>The fruit program</h1>
 
    <?php
/* First comes class: the data type consists
 of both data and functions.*/ 
    class fruit{

        public $name; // Public property to store the name of the fruit.

        public $color; // Public property to store the color of the fruit.

         // Method to set the name of the fruit.
        function set_name($name){
            $this->name=$name;  // Setting the value of the 'name' property.
        }

        // Method to get the name of the fruit.
        function get_name(){
            return $this->name; // Returning the value of the 'name' property.
        }
    }

/* from here it is object 
object is an instance of a class where as, 
class creates instances of the same kind of onjects.*/  

    // Creating instances of the fruit class: $apple and $banana.

    $apple= new fruit();  // Creating an instance of fruit class and assigning it to $apple.
    $banana= new fruit();  // Creating another instance of fruit class and assigning it to $banana.

     // Setting the name of the $apple and $banana objects using the set_name() method.
    $apple->set_name("Apple");  // Setting the name of $apple to "Apple".
    $banana->set_name("Banana");  // Setting the name of $banana to "Banana".

     // Outputting the names of the fruits using the get_name() method.
    echo $apple->get_name();  // Echoing the name of $apple.
    echo "<br>";  // HTML line break for formatting.
    echo $banana->get_name(); // Echoing the name of $banana.





    
    
    ?>
</body>
</html>