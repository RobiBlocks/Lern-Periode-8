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
    <form action="forms.php" method="post">
        <input type="radio" name="credit_card" value="Visa">
        Visa<br>
        <input type="radio" name="credit_card" value="Masterkarte">
        Masterkarte<br>
        <input type="radio" name="credit_card" value="Postkarte">
        Postkarte<br>
        <input type="submit" name="confirm" value="confirm">
    </form>
    <br>
    <form action="forms.php" method="post">
        <input type="checkbox" name="feuer" value="Feuer">
        Feuer<br>
        <input type="checkbox" name="wasser" value="Wasser">
        Wasser<br>
        <input type="checkbox" name="blitz" value="Blitz">
        Blitz<br>
        <input type="checkbox" name="erde" value="Erde">
        Erde<br>
        <input type="checkbox" name="eis" value="Eis">
        Eis<br>
        <input type="submit" name="submit" value="submit">
    </form>
    <br>
    <form action="forms.php" method="post">
        <input type="text" name="username" placeholder="Benutzername">
        <input type="text" name="age" placeholder="Alter">
        <input type="text" name="email" placeholder="EMail">
        <input type="submit" name="login" value="login">
    </form>
</body>

</html>
<?php
if (isset($_POST["confirm"])) {
    if (isset($_POST["credit_card"])) {
        $credit_card = $_POST["credit_card"];
        echo $credit_card;
    } else {
        echo "Please make a selection";
    }
}

if (isset($_POST["submit"])) {
    if (isset($_POST["feuer"])) {
        echo "Feuer <br>";
    }
    if (isset($_POST["wasser"])) {
        echo "Wasser <br>";
    }
    if (isset($_POST["blitz"])) {
        echo "Blitz <br>";
    }
    if (isset($_POST["erde"])) {
        echo "Erde <br>";
    }
    if (isset($_POST["eis"])) {
        echo "Eis <br>";
    }
}

if (isset($_POST["login"])) {
    // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    // echo "Hello {$username}<br>";
    // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    // echo "You're {$age} years old";
    // $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    // echo "You're EMail is {$email}";

    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

    if (empty($age)) {
        echo "Dein Alter ist ungültig<br>";
    } else {
        echo "Du bist {$age} Jahr/e alt<br>";
    }


    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    if (empty($email)) {
        echo "Deine EMail ist ungültig<br>";
    } else {
        echo "You're EMail is {$email}<br>";
    }
}
?>