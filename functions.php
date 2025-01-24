<?php
include("header.html");

// functions
function Force(string $name)
{
    echo "May the force be with you {$name}!<br>";
}
function istGerade(int $number)
{
    return $number % 2;
}

Force("Robin");
Force("Szymon");
Force("Florian");

echo istGerade(36);
echo istGerade(7);

//string functions
echo "<br>";
$name = "Robin Mueller";
$phone = "234-73-96";
echo "{$name}<br>";
echo "{$phone}<br>";
echo "<br>";

$name0 = strtolower($name);
echo "{$name0}<br>";
$name1 = strtoupper($name);
echo "{$name1}<br>";
$name = trim($name);
echo "{$name}<br>";
$name2 = str_pad($name, 20, "*");
echo "{$name2}<br>";
$phone = str_replace("-", "", $phone);
echo "{$phone}<br>";
$name = strrev($name);
echo "{$name}<br>";
$name = str_shuffle($name);
echo "{$name}<br>";

$name = "Robin Mueller";

$equals = strcmp($name, "xyz");
echo "{$equals}<br>";
$count = strlen($name);
echo "{$count}<br>";
$index = strpos($name, " ");
echo "{$index}<br>";

$firstname = substr($name, 0, strpos($name, " "));
echo "{$firstname}<br>";
$lastname = substr($name, strpos($name, " "));
echo "{$lastname}<br>";
//explode and implode
