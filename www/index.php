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
    First Num: <input type="number" step="0.00667787878601" name="num1">
    Second Num: <input type="number" step="0.00055555554561" name="num2">
    OP: <input type="textbox" name="op"><br>
    <input type="submit">
  </form>
</body>
<?php 
 $num1 = $_POST["num1"];
 $num2 = $_POST["num2"];
 $op = $_POST["op"];

 if($op == "+"){
  echo ($num1 + $num2);
 } elseif($op == "-"){
  echo ($num1 - $num2);
 } elseif($op == "*"){
  echo ($num1 * $num2);
 } elseif($op == "/"){
  echo ($num1 / $num2);
 } else{
  echo ucwords('invalid operator');
 }
 ?>
</html>