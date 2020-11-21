<?php
require_once 'connect.php';
$test_id=$_GET['test_id'];

$test = mysqli_query($connect, "SELECT * FROM `test` WHERE `test_id` = '$test_id' ");

$test= mysqli_fetch_assoc($test);
 print_r($test);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	
</head>
<body>

<h1>Изменение данных о Зачете</h1>

<form action="update_test2.php" method="post">

<input type="hidden" name="test_id" value="<?= $test['test_id']?>">

<?php
require_once 'connect.php';

$discipline= mysqli_query($connect,"SELECT * FROM `discipline`");

   echo("id предмета :<select discipline_id='discipline_id' name='discipline_id'>");
   
    echo("<option disabled>Выберите</option>");
     while($row2 = mysqli_fetch_array($discipline)){
        echo("<option value='$row2[0]'> $row2[0] - $row2[1]</option>");
     }
      echo "</select>";
 echo "<br> </br>";
$products= mysqli_query($connect,"SELECT * FROM `users`");

   echo("id студента :<select users_id='users_id' name='users_id'>");

    echo("<option disabled>Выберите</option>");
     while($row = mysqli_fetch_array($products)){
        echo("<option value='$row[0]'> $row[0] - $row[1]</option>");
     }
  echo "</select>";
  echo "<br> </br>";

     ?>

	<p>дата начала</p>
<input type="date" name="date_delivery" value="<?= $test['date_delivery']?>" >
	
<input type="submit" value="Изменить" >
</form>





</body>
</html>