<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "<pre>";

echo "Indexed arrays:<br>";

$movies = array("Back to the Future", "BraveHeart", "Tron Legacy", "The Bodyguard");
$movies[] = "Wonder Woman";
var_dump($movies);

$shows[] = "Scrubs";
$shows[] = "The Boys";
$shows[] = "Mr.Robot";
var_dump($shows);

echo "<ul>";
foreach($movies as $movie) {
    echo "<li>$movie</li>";
}
echo "</ul>";

echo "<ol>";
foreach($shows as $show) {
    echo "<li>$show</li>";
}
echo "</ol>";

echo "Associative arrays:<br>";

$colors = array("Aaron"=>"green", "Joseph"=>"olive");
$colors['Sarah'] = 'blue';
$colors['Kim'] = 'pink';
$colors['Alisa'] = 'mint green';

foreach($colors as $person=>$color) {
    echo "<p>$person likes $color</p>";
}

var_dump($_SERVER);

echo "</pre>";