<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Starter Project</title>
</head>
<body>
  <form action="index.php" method="post">
   
  </form>
</body>
<?php 
  $index = 2000;
  $luckyNum = array("oloja", 3, 4, 5, 2,7,6);

 for($i = 0; $i < count($luckyNum); $i++){
    echo "$luckyNum[$i] <br> ";
 }
 ?>
</html>