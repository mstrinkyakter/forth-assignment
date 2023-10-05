<?php

include "connect.php";
function addItems(){
    global $conn;
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conn->exec("INSERT INTO crud_operation (name,email,password) VALUES ('$name','$email','$password')");
}
addItems();
?>