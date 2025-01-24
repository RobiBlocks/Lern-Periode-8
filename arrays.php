<?php
include("header.html");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>
<?php
// arrays
$colours = array("green", "blue", "red", "white");
echo "Color of my Lightsaber is $colours[1]<br><br>";

array_push($colours, "violet", "black");
array_shift($colours);
array_pop($colours);

echo "<strong>The colours: </strong>";
echo count($colours);
echo "<br>";
foreach ($colours as $colour) {
    echo "{$colour}<br>";
}
echo "<br>";

//associative array
$jedis = array(
    "Anakin" => "blau",
    "Yoda" => "grün",
    "Mace" => "violett"
);

$jedis["Mace"] = "pink";
$jedis["Ashoka"] = "gelb";

// array_shift($jedis);
// array_pop($jedis);

$keys = array_keys($jedis);
$values = array_values($jedis);
$lightsaberColours = array_flip($jedis);

echo "<strong>The colours: </strong>";
echo count($jedis);
echo "<br>";
foreach ($lightsaberColours as $lightsaberColour => $name) {
    echo "{$name} hat ein {$lightsaberColour}es Lichtschwert.<br>";
}
echo "<br>";

// isset(), empty()
$name1 = "RobiBlocks";
if (isset($name1)) {
    echo "You've already set your username to \"{$name1}\".<br>";
} else {
    echo "You haven't yet set a username.<br>";
}

$name2 = "";
if (empty($name2)) {
    echo "You haven't yet set a username.<br>";
} else {
    echo "You've already set your username to {$name2}.<br>";
}
?>