<?php
require 'config.php';
$query=$conn->query("SELECT *FROM crud_operation");
$result=$query->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach($result as $results): ?>
    <p><?php echo $results['name'] ?></p>
    <p><?php echo $results['email'] ?></p>
    <p><?php echo $results['password'] ?></p>
    <?php endforeach ?>

    <a href="index.php">Back</a>