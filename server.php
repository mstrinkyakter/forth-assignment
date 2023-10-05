<?php

include "config.php";

    global $conn;
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    echo "<h1> $name,$email,$password </h1>";
    $conn->exec("INSERT INTO crud_operation (name,email,password) VALUES ('$name','$email','$password')");
    
?>