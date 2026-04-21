<?php
include("auth_check.php");
?>
<?php
include 'db.php';
$id = $_GET['id'];
$result= mysqli_query($conn,"select * from employee where id=$id");
$row = mysqli_fetch_assoc($result);
?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>?id=1">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
    Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
    Password: <input type="text" name="password" value="<?php echo $row['password']; ?>"><br><br>
    <input type="submit" name="update" value="update">
</form>
<?php
if($_POST["name"]) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    mysqli_query($conn,"UPDATE employee SET 
        name='$name',email='$email',password='$password' WHERE id=$id");
        
    header("Location: index.php");
}
?>

