<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "hello";

$con = mysqli_connect($host, $username, $password, $database);

if (!$con) {
    die("connection dfailed" > mysqli_connect_error());
}
?>