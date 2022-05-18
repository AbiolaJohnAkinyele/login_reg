<?php
session_start();
$_SESSION;

if(!$con = mysqli_connect("localhost", "root", "", "meta_data")){
    die("failed to registered!");
}
include("create-account.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Page</title>
</head>
<body>
 
  <h1>Register a new Account</h1>
  <form action="create-account.php" method="post">
      <label><b>Your Name</b></label> <br>
      <input type="text" name="username" value="" placeholder="Enter Your Full Name..." size="44" required><p />
      <label><b>Your Contact</b></label> <br>
      <input type="text" name="contact" value="" placeholder="Enter Your Phone Number..." size="44" required><p />
       <label><b>Your Email</b></label> <br>
      <input type="email" name="email" value="" placeholder="example@example.com" size="44" required><p />
      <label><b>Your Password</b></label> <br>
      <input type="password" name="password" value="" placeholder="Enter Your Password..." size="48" required><p />
      <h3>Please Select</h3>
        <input type="checkbox" name="brands[]" value="Fashion and Textile Industry">Fashion and Textile Industry <br>
         <input type="checkbox" name="brands[]" value="Food and Hospitality Industry">Food and Hospitality Industry <br><input type="checkbox" name="brands[]" value="Drug and Health Industry">Drug and Health Industry <br>
           <input type="checkbox" name="brands[]" value="Hospitality and Accomodation Industry">Hospitality and Accomodation Industry <br> <br><br>
               <input type="submit" name="createaccount" value="Create Account">
               
     
      
  </form>       
   
</body>
</html>