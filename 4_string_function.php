<?php
$name = "Satish is a bad boy";
$bro = "Amit";

// Add two String
echo "$bro" . " is brother of " . "$name";
echo "<br>";

// print lenght of string
echo strlen($name);
echo "<br>";

// word count
echo str_word_count($name);
echo"<br>";
// revers string
echo strrev($name);
echo"<br>";

// search string
echo strpos($name, "is");
echo"<br>";

// replace string
echo str_replace("Satish", "amit", $name);
echo"<br>";

// 
?>