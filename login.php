<h1>Login</h1>




<input type="text" name="email" required> <br><br>
<input type="password" name="password" required><br><br>






<button name="login" value="login">Login</button><br><br>

<input type="submit" value="Dont have Account Yet, Signup">



<?php

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    
    $select_customer = "select * from table1 where email = '$email' AND password = '$password'";
    $run_customer = mysqli_query($con, $select_customer);
    $get_ip = getRealIpUser();
    
    $check_customer = mysqli_num_rows($run_customer);
    
    if($check_customer == 0){
        echo "your email or password is wrong";
        exit();
    }
    if($check_customer ==1){
        $_SESSION['email'] = $email;
        echo "<script>alert('You are Logged in')</script>";
        echo "<script>window.open('welcome.php', '_self')</script>";
    }else{
         $_SESSION['email'] = $email;
        echo "<script>alert('You are not Logged in')</script>";
        echo "<script>window.open('logout.php', '_self')</script>";
    }
 
}


?>


