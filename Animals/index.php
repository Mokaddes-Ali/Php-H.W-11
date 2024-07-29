<?php 
namespace Animals;
include_once("cat.php");
include_once("dog.php");
include_once("crow.php");

use Animals\cat;
$cat = new cat();
$cat -> greet();
echo "<br />";

$dog = new dog\dog();
$dog -> greet();

echo "<br />";

$crow = new crow\crow();
$crow -> greet();


?>