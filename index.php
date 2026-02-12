<?php include "connection.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple CRUD</title>
</head>
<body>

<h2>User List</h2>

<a href="add.php">Add New User</a>
<br><br>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Fullname</th>
    <th>Email</th>
    <th>Action</th>

</tr>


    <?php
    $query = "SELECT * FROM users";;
    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['fullname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
                <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Delete this user?')">Delete</a>
            </td>
        </tr>
    <?php } 
    
?>

</table>

</body>
</html>
