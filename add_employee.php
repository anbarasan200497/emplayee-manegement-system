<?php
include("auth_check.php");
?>
<html>
     <?php include 'db.php'; ?>
    <?php
if (!$conn){
  die("connection failed");
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
echo "This is Post method";
 $n=$_POST['name'];
 $c=$_POST['password'];
 $p=$_POST['email'];
if($_POST['email']){
    $sql = "INSERT INTO employee(name,password,email)values('$n','$c','$p')";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    echo "Data inserted successfully";
} else {
    echo "Error: " . $conn->error;
}
}
}

 ?>
<head>
<title>employee forms</title>
</head>
<body>
 <center>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<br>
SIGN UP<br><br>
USERNAME:<input type="text" name="name"><br><br>
PASSWORD:<input type="text" name="password"><br><br>
EMAIL   :<input type="text" name="email"><br><br>
<button type="submit">add employee</button>
</form>
</center>

</body>


</html>