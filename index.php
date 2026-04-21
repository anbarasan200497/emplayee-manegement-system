<?php
include("auth_check.php");
?>
<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee List</title>

    <link rel="stylesheet" href="style.css">
   
</head>
<body>
     <?php include 'db.php'; ?>
    <h2>Employee List</h2>

    <div class="add-btn">
       <a href="add_employee.php">➕ Add Employee</a><br><br>
    </div>

    <table>
        <tr>
            <th>Employee ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>

        <?php
$sql = "SELECT * FROM employee";
$result = $conn -> query($sql);
while($row = $result->fetch_assoc()) {
?>
<tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['name']; ?></td>
    <td><?= $row['email']; ?></td>
    <td><?= $row['password']; ?></td>
    <td>
 <div class="edit-btn">
    <a href="edit.php?id=<?=$row['id']; ?>">Edit</a>
</div>

<div class="delete-btn">
    <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('delete?')">Delete</a>
</div>

</tr>
<?php
 } 

?>
    </table>
<a href="logout.php">Logout</a>
</body>
</html>
