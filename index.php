<?php
include "connect.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $address=$_POST['address'];

    $sql="insert into `student` (name,address) values ('$name','$address')";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        die(mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<form  method="post">
  <div class="container">
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" name="name" class="form-control" >
   
  </div>
  <div class="mb-3">
    <label class="form-label">Address</label>
    <input type="text" name="address" class="form-control" >
  </div>
 <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</body>
</html>
