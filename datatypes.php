<?php
include("header.html");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button>Schnitzel</button><br>
</body>

</html>
<?php
// $_GET, $_POST
echo "Hello {$_SESSION["username"]}. You've the password {$_SESSION["password"]} <br>";

// string
$firstName = "Ahsoka";
$lastName = "Tano";
echo "{$firstName}<br>";
echo "Hello {$firstName} {$lastName}<br>";

// integer
$year = 2025;
$quantity = 35;
echo "It's {$year}!<br>";

// float
$weight = 72.8;
$height = 172.62;
echo "You have a weight of {$weight} and a height of {$height}<br>";

// boolean
$isJedi = true;
$hasLightsaber = false;
echo "Jedi: {$isJedi}<br>";
echo "Lightsaber: {$hasLightsaber}<br>";

//arithmetics: +, -, *, /, **, %
$number1 = 3;
$number2 = 3.2;
$total = $number1 * $number2;
echo "Total: {$total}<br>";

// Increment/Decrement ++, --
$number1++;
echo "Increment {$number1}<br>";
$number2--;
echo "Decrement {$number2}<br>";
$number2 += 10;
echo "Decrement {$number2}<br>";

//math functions
$a = 4;
$b = 3;
$c = 5;
$x = -6.8;
$y = 12.4172;

$total = abs($x);
echo "{$total}<br>";
$total = round($y, 2);
echo "{$total}<br>";
$total = floor($y);
echo "{$total}<br>";
$total = ceil($y);
echo "{$total}<br>";
$total = pow($a, $b);
echo "{$total}<br>";
$total = sqrt($a);
echo "{$total}<br>";
$total = max($a, $b, $c);
echo "{$total}<br>";
$total = min($a, $b, $c);
echo "{$total}<br>";
$total = pi();
echo "{$total}<br>";
$total = rand(1, 6); // 1 to 6
echo "{$total}<br>";
?>