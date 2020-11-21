<?php
require_once 'connect.php';
$test_id=$_GET['test_id'];
echo $test_id;
mysqli_query($connect,"DELETE FROM `test` WHERE `test`.`test_id` = '$test_id' ");
//header('Location:index2.php');
?>
<a href="index2.php">на главную</a>