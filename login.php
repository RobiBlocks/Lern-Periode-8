<?php
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
    <h2>Login page</h2>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        username:<br>
        <input type="text" name="username"><br>
        password:<br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>

</html>
<?php
$password = "doggy123";
$hash = password_hash($password, PASSWORD_DEFAULT);
if (isset($_POST["username"])) {
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        if (password_verify($_POST["password"], $hash)) {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
            header("Location: datatypes.php");
        } else {
            echo "wrong password";
        }
    }
}
?>