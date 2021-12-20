<?php

// String
// Integer --> non decimal number
// Float
// Boolean
// Object
// Array
// NULL

// String --> sequence of character
$name = "satish";
$friend = "amit";

echo "$name is $friend";
echo "<br>";

// Integer --> non decimal number
$income = 323;
$debts = -245;
echo "$income";
echo"<br>";
echo "$debts";
echo"<br>";

// Float --> decimal point number
$income = 32.3;
$debts = -24.5;
echo "$income";
echo"<br>";
echo "$debts";
echo"<br>";

// Boolean --> can be either true or false
$x = "ture";
$X_girl = "false";

echo "$x";
echo"<br>";
echo var_dump($x);  // var_dump is a funtion to find variable which data type belong 
echo"<br>";

echo "$X_girl";
echo"<br>";
echo var_dump($X_girl);
echo"<br>";

// object --> instances of classes
// Employee is a class --> Satish can be one object

//Array --> used to store multiple values in a single variable
$brothers = array("Amit", "Sumit", "Ashish", "Adit","Jon", "Arnav");

echo var_dump($brothers); // var_dump is a funtion to find variable which data type belong 
echo"<br>";

echo "$brothers[0]";
echo"<br>";
echo "$brothers[1]";
echo"<br>";
echo "$brothers[2]";
echo"<br>";
echo "$brothers[3]";
echo"<br>";
echo "$brothers[4]";
echo"<br>";
echo "$brothers[5]";
echo"<br>";
// echo "$brothers[6]"; --> will throw an error as the size of array is 5


// NULL 
$name = "NULL";
echo "$name";
echo var_dump($name);
?>