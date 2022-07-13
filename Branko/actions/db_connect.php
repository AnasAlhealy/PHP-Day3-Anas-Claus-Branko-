<?php 
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "easyeate";

$connect= mysqli_connect($localhost, $username, $password, $dbname);

try {
    $connect= mysqli_connect($localhost, $username, $password, $dbname);

}catch (mysqli_sql_exception $e) {
    echo " Failed to connect: " .mysqli_connect_error();
}


?>