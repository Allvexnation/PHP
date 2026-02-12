<?php

include "connection.php";

$id = $_GET['id'];

$result = mysqli_query($con, "SELECT * FROM users WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];


if(!empty($password)) {
    $hashPass = password_hash($password, PASSWORD_DEFAULT);


    $query = "UPDATE users SET fullname = '$fullname', email = '$email', password = '$hashPass' WHERE id=$id";
} else {
    $query = "UPDATE users SET fullname = '$fullname', email = '$email' WHERE id=$id";
}

if (mysqli_query($con, $query)) {
    echo "<script>
    alert('User updated successfully');
    window.location.href='index.php';
    </script>";
    exit();
} else {
    echo "Error updaTING RECORD";
}


}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" onsubmit = "return confirmUpdate()">
    <label for="email">Your email</label>
    <input type="text" name="email" value="<?php echo $row['email']; ?>"
    <label for="fullname">Your fullname</label>
    <input type="text" name="fullname" value="<?php echo $row['fullname']; ?>"
    <label for="password">Your password (LEAVE IT BLANK IF NOT CHANGE)</label>
    <input type="text" name="password" nmame="password">
    <button type ="submit" name="update">Update</button>
    </form>
    <script>
    function confirmUpdate() {
        return confirm("Are you sure you want to update thjis user?");
    }
</script>
</body>


</html>