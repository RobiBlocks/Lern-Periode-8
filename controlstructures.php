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
// if statment
$age = 0;
if ($age >= 18) {
    echo "You're older than 18.<br>";
} elseif ($age == 0) {
    echo "You were just born.<br>";
} else {
    echo "You are too young!<br>";
}

// logical operators: &&, ||, !
$forcepower = 18652;

if ($forcepower >= 8000 && $forcepower <= 20000) {
    echo "You're a normal Jedi.<br>";
} elseif ($forcepower <= 0 || $forcepower >= 20000) {
    echo "You are the chosen one!<br>";
} else {
    echo "You're a normal person!<br>";
}

// switch
$rank = "Captain";

if ($rank == "Commander") {
    echo "You're commanding a lot of clones<br>";
} elseif ($rank == "Captain") {
    echo "You're commanding a big group of clones<br>";
} else {
    echo "You're a simple clone<br>";
}

$rank = "Sergant";

switch ($rank) {
    case "Commander":
        echo "You're commanding a lot of clones<br>";
        break;
    case "Captain":
        echo "You're commanding a big group of clones<br>";
        break;
    case "Lieutenant":
        echo "You're commanding a small group of clones<br>";
        break;
    case "Sergant":
        echo "You're commanding a few clones<br>";
        break;
    default:
        echo "You're a simple clone<br>";
        break;
}

// for loop: limited amount
echo "<br>for loop:<br>";
for ($i = 0; $i <= 36; $i += 3) {
    echo "{$i}<br>";
}

// while loop: infinitely
echo "<br>while loop:<br>";
$seconds = 100;
$running = true;
while ($running) {
    if ($seconds > 200) {
        $running = false;
    }
    echo "{$seconds}<br>";
    $seconds++;
}
?>