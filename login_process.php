<?php
session_start();
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
if(!$result){
    die("Query Error: " . mysqli_error($conn));
}

if(mysqli_num_rows($result) == 1){
    $_SESSION['user'] = $username;
    header("Location: index.php");
    exit();
} else {
    echo "Login Failed!";
}
?>