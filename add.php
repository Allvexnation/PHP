<?php
include "connection.php";

if(isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashpass = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (fullname, email, password) VALUES ('$fullname','$email', '$hashpass')";

    if(mysqli_query($con, $query)) {
        echo "<script>alert('succesfully added'); window.location.href='index.php'</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
       <title> ADD USER</title>
    </head>
    <body>
        <form method="POST">
            <label for="fullname">Your Fullname</label>
            <input type="text" name="fullname">
            <label for="email">Your email</label>
            <input type="email" name="email">
            <label for="password">Your password</label>
            <input type="text" name="password">
            <button type="submit" name="submit">submit</button>
        </form>
    </body>
</html>