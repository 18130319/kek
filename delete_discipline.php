<?php
require_once 'connect.php';
$discipline_id=$_GET['discipline_id'];
echo $discipline_id ;



mysqli_query($connect,"DELETE FROM `test` WHERE `test`.`discipline_id` = '$discipline_id' ");



mysqli_query($connect,
"DELETE FROM `discipline` WHERE `discipline`.`discipline_id` = '$discipline_id' ");








//header('Location:index2.php');

?>
<a href="index2.php">назад</a>
