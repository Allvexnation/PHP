<?php
include "connection.php";

$id = $_GET['id'];

if(mysqli_query($con, "DELETE FROM users WHERE id=$id")) {
    echo "<script> alert ('user succesfully deleted'); window.location.href='index.php';</script>";
}

?>
