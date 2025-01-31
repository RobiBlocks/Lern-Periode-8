<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "swdb";
$connection = "";


$connection = mysqli_connect($db_server,
                             $db_user,
                             $db_password,
                             $db_name);

if($connection){
    echo "Connection was successful!";
}
else{
    echo " Connection failed!";
}
?>