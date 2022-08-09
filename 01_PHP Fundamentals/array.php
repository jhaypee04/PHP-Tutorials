<?php

//Three types of arrays in PHP
// 1. indexed array
// 2. associative arrays
// 3. multidimensional array

// indexed array
$array = array( 'one', 'two', 'three');
//or
//$array = [];
// Accessing Array values
echo $array[1];

// associative array
$associative_array = array(
    1 => 1,
    'Favour' => 'Genius'
);

echo $associative_array['Favour'];

// multidimensional array

$multi_array = array(
    array(1,2,3,4,5,6),
    array(13,4,5,6),
    array(24,5,6)
);

echo $multi_array[1][2];

//Geting the Size of an array
$cars=array("Volvo","BMW","Toyota");
echo count($cars);

//or

//$cars=array("Volvo","BMW","Toyota");
//echo sizeof($cars);

//Looping through an array

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
 echo "$value <br>";
}


//Looping through an asociative array

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
 echo "$x = $val<br>";
}


//Examining Arrays

//Using print_r
print_r ($age);

echo '<br><br> Below is the use of var_dump <br>';

//Using var_dump
var_dump($age);

//Joining Arrays
$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr)."<br>";
echo join("+",$arr)."<br>";
echo join("-",$arr)."<br>";
echo join("X",$arr);

//Sorting Arrays
$cars = array("Volvo", "BMW", "Toyota");

echo '<br> Before sorting : <br>';
print_r($cars);

sort($cars);

echo '<br> After sorting : <br>';
print_r($cars);

// Sortimg an associative array 
$age = array("Peter"=>"53", "Ben"=>"37", "Joe"=>"43");

echo '<br> Before sorting : <br>';
print_r($age);

asort($age);

echo '<br> After sorting : <br>';
print_r($age);

?>