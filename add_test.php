
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h3>Добавление Зачета</h3>
<form action="create_test.php" method="post">
	
	<p>Дата сдачи</p>
<input type="date" name="date_delivery" >
	<p></p>
<?php
require_once 'connect.php';


$products= mysqli_query($connect,"SELECT * FROM `users`");


   echo("id студента :<select users_id='users_id' name='users_id'>");

    echo("<option disabled>Выберите</option>");
     while($row = mysqli_fetch_array($products)){
        echo("<option value='$row[0]'> $row[0] - $row[1]</option>");
     }
  echo "</select>";
  echo "<br> </br>";






$discipline= mysqli_query($connect,"SELECT * FROM `discipline`");

   echo("id предмета :<select discipline_id='discipline_id' name='discipline_id'>");
   
    echo("<option disabled>Выберите</option>");
     while($row2 = mysqli_fetch_array($discipline)){
        echo("<option value='$row2[0]'> $row2[0] - $row2[1]</option>");
     }
      echo "</select>";

     ?>
     <p></p>
<input type="submit" value="Добавить" >
</form>

 </body>
</html>
