<?php
require_once 'connect.php';
$users_id=$_GET['users_id'];

 echo "$users_id <br>";


mysqli_query($connect,"DELETE FROM `test` WHERE `test`.`users_id` = '$users_id' ");


mysqli_query($connect,"DELETE FROM `users` WHERE `users`.`users_id` = '$users_id' ");




//header('Location:index2.php');


?>
<a href="index2.php">назад</a>