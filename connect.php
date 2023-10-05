<?php
$db_name="mysql:host=localhost;dbname=crud";
$username="root";
$password="";

$conn=new PDO($db_name,$username,$password);
if($conn){
    echo "connect";
}
else{
    echo "not connect";
}
?>