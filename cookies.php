<?php
    include("header.html");

    setcookie("favSubject", "maths", time() + (86400 * 1), "/");
    setcookie("favColour", "skyblue", time() + (86400 * 2), "/");

    foreach($_COOKIE as $key => $value){
        echo "{$key}: {$value} <br>";
    }
?>