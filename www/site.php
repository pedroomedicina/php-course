<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
  <!--  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script> -->
</head>
<body>
  <form action="site.php" method="post">
    First num: <input type="number" step="0.001" name="num1"> <br>
    OP: <input type="text" name="op"> <br>
    Second Num: <input type="number" name="num2"> <br>
    <input type="submit">
  </form>

  <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    if($op == "+"){
      echo $num1 + $num2;
    } elseif($op == "-"){
      echo $num1 - $num2;
    } elseif($op == "*"){
      echo $num1 * $num2;
    } elseif($op == "/"){
      echo $num1 / $num2;
    } else {
      echo "Invalid Operator";
    }
  ?>
</body>
</html>
