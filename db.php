<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$conn = mysqli_connect("localhost", "root", "", "emp");

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}else{
    echo "success";
}
?>
</body>
</html>
