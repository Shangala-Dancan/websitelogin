<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM users WHERE username='$username'";
    $result=$conn->query($sql);

    if($result->num_rows>0){
        $row=$result->fetch_assoc();

        if(password_verify($password, $row['password'])){
           header("Location:index.php")
        }
        else{
            echo"invalid password";
            
        }
    }
        else{
            echo "user name not found";
          
        }

    
    $conn->close();
}
?>