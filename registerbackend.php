<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];

    if($password!=$confirm_password){
        echo "passwords do not match";
        exit();
    }
    

    $hashed_password=password_hash($password,PASSWORD_BCRYPT);
    $sql="INSERT INTO users (username,email,password) VALUES('$username','$email','$hashed_password')";

    if($conn->query($sql)==TRUE){
        header("Location: login.php");
    }
    else{
        echo" Error:".$sql."<br>".$conn->error;
    }
    $conn->close();
}

?>