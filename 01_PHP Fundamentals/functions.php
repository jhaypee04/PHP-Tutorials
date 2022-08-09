<?php
// 04/08/22
//Functions
//What is a function
//PHP Constants
//To create a constant, use the define() function
//Syntax
//define(name, value, case-sensitive)
//Parameters:
//name: Specifies the name of the constants
//value: Specifies the value of the constant
//case-insensitive: Specifies whether the constant name should be case-sensitive. Default is false
//Example
//Create a constant with  case-insensitive name:

    define('GREETING', 'Welcome to Loctech!', true);
    echo greeting;
//........................................
echo '<br>';

//Defining a Function
//Returning value from function 
//Example
function add1($x){
    return $x + 1;
}
echo '5 + 1 is ' . add1(5);
//........................................
echo '<br>';

//User-defined function
//Example
function writeMsg(){
    echo 'Hello World';
}
writeMsg();
//........................................
echo '<br>';

//Dynamic Function Call in PHP
function sayHello() {
    echo 'Hello';
}
$function_holder = 'sayHello';
$function_holder();
//........................................
echo '<br>';

//Variable Scope
//Example
//Variable with global scope
$x = 5; #global scope

function myTest1(){
//    Using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x </p>";
}
myTest1();

echo "<p>Variable x outside function is: $x </p>";

//Example
//Variable with local scope
function myTest2(){
    $a = 5; //local scope
    echo "************************************";
    echo "<p>variable a inside function is: $a </p>";
}
myTest2();

//Using a outside the function will generate an error
echo "<p>Variable a outside function is: $a </p>";

//........................................
echo '<br>';

//Accessing variable with the global statement
//Example
$b = 5;
$c = 10;

function myTest3(){
    global $b, p ;
    $c = $b + $c;
}
myTest3();
echo $c; // Outputs 15

//........................................
echo '<br>';

//Function calls with the static statement
//Example
function myTest4(){
    static $d = 0;
    echo $d . '<br>';
    $d++;
}
myTest4();
myTest4();
myTest4();

//........................................
echo '<br>';

//Setting default values for Argument
//Example
function setHeight(int $minHeight = 50){
    echo "The height is: $minHeight <br>";
}
setHeight(350);
setHeight();
setHeight(135);
setHeight(180);

//........................................
echo '<br>';

//Passing arguments to a function by reference
//Example
function add_five(&$value){
    $value += 5;
}
$num = 2;
add_five($num);
echo $num;

//........................................
echo '<br>';

//Testing for function existence
//Example
if(function_exists('in_array')){
    echo 'in_array() function is available \n';
} else {
    echo 'in_array() function is not available \n';
}
?>








