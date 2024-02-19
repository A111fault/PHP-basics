<?php
//double slash is used for commenting or making a line in active
/* and a single slash with star or astrick
and ending with star sign and a single slash comments out
the amount of line you want to comment out.*/

//simple printing a sentence
// after every line semi-colon is needed

echo "Hello and welcome to php concepts";

//simple variables 
//str is string  
$str = "str that stores variables<br>";

//num is for integer numbers
$num = 5;

//float is for decimal nnumbers
$float = 7.5;

//to print the variables we need echo mayb a header tag and two dots befor and after the variable name
//echo <h1>.$str.<h1>;
echo  $str."<br>" ;
echo  $num."<br>" ;
echo $float."<br>";

//how array works
//it can save all kinds of data under a single variable

$laptop_brand = array("Hp", "Lenovo", "Asus", "Dell");
//why var_dump because it can export the variable you want
echo var_dump($laptop_brand) . "<br>";

/* echo prints out array(4) { [0]=> string(2) "Hp" [1]=> string(6) "Lenovo" [2]=> string(4) "Asus" [3]=> string(4) "Dell" }
but we only printed the brand names here array (4) shows the length
[0],[1] is position 
string shows the number of letters.*/

// what if we want to print only one brand

echo var_dump($laptop_brand[3]) . "<br>";

/*consonant
define("laptops", "Hp", "Lenovo", "Asus");
echo laptops;*/
// consonant another way to print
define("laptops", ["Hp", "Lenovo", "Asus"]);
echo  laptops[1] . "<br>";

// how to write conditional statements

$var = 8;
if ($var > 7) {
    echo $var . "<br>";
} else {
    echo "The condition did not meet<br>";
}

$var = 6;
if ($var % 2 == 0 && $var % 3 == 0) {
    echo "divisible by both<br>";
} elseif ($var % 2 == 0) {
    echo "divisible by 2<br>";
} elseif ($var % 3 == 0) {
    echo "divisible by 3<br>";
} else {
    echo "Not divisible by both<br>";
}


//switch function
$level = 4;

switch ($level) {
    case 1:
        echo "You are playng at gold rank";
        break;

    case 2:
        echo "You are playng at an platinum rank";
        break;

    case 3:
        echo "You are playng at an diamond rank";
        break;

    case 4:
        echo "You are playng at an immortal rank";
        break;
    default:
        echo "Invalid input";
}


//while loop
$var=2;
while($var<=10){
    echo "Number:$var<br>" ;
    $var++;
}

//do while
$var = 11;
do {
    echo "Number: $var <br>";
    $var++;
} while ($var <= 10);


//for loop 
for($var=1; $var<=6; $var++){
    echo "Number: $var <br>";

}

/*function or calling a function 
basically if need to run th e fuction again
you can cll the fucntion again and it will 
print the data inside the function like calling 
a name*/
function name(){
    for($var=1; $var<=6; $var++){
        echo "Number: $var <br>";
    
    }

}
name();
echo "I am going to run it again later <br>";
name();



?>
