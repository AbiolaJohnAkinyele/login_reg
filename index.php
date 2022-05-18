<?php 
session_start();
$_SESSION; 

$con = mysqli_connect("localhost", "root", "", "meta_data");
$user_data = check_login($con);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>INDEX PAGE</title>
</head>
<body>
   <a href="logout.php">Logout</a>
   <h1>Welcome to INDEX_PAGE</h1>
    
</body>
</html>