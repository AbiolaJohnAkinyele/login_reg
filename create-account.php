<?php
//session_start();
//$_SESSION;



   function getRealIpUser(){
        switch(true){
                case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
                case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
                case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_HTTP_X_FORWARDED_FOR'];
                default : return $_SERVER['REMOTE_ADOR'];
        }
    }








if(!$con = mysqli_connect("localhost", "root", "", "meta_data")){
    die("failed to connect");
}


if(isset($_POST['createaccount'])){
    $username = $_POST['username'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $query1 = "INSERT INTO table1 (username, contact, email, password) VALUE ('$username', '$contact', '$email', '$password')";
    
    $query_run1 = mysqli_query($con, $query1);
    
    
    
    
    $brands = $_POST['brands'];
   
    foreach($brands as $items){
        $query = "INSERT INTO table1 (check_box) VALUE ('$items')";
        $query_run = mysqli_query($con, $query);
        
    }
    
    if($query_run && $query_run1){
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: create-account.php");
    }else{
        
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: create-account.php");
    }
}
?>
<h1>Inserted Successfully!</h1>




<?php
function check_login($con){
    
    if(isset($_SESSION['username'])){
        
        $user = $_SESSION['username'];
        $query2 = "SELECT * FROM table1 where username = '$user' limit 1";
        
        $query_run2 = mysqli_query($con, $query2);
        if($query_run2 && mysqli_num_rows($query_run2) > 0){
            $user_data = mysqli_fetch_assoc($query_run2);
            return $user_data;
        }
    }
    
    //redirect to login
    header("Location: login.php");
    die;
}

?>