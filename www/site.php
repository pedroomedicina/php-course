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
 <!-- <form action="site.php" method="post">
    What was your grade?<br>
    <input type="text" name="grade">
    <input type='submit'>
  </form> -->
  <?php
    //a while loop
    $index = 1;
    while($index <= 5){
      echo "$index <br>";
      $index++;
    }
    //equivalent for loop
    for($i= 1; $i <= 5; $i++){
      echo "$i <br>";
    }
    //a way to use for loops
    $luckyNumbers = array(4, 8, 14, 16, 23, 42);
    for ($i = 0; $i <= count($luckyNumbers); $i++){
      echo "$luckyNumbers[$i] <br>";
    }

  ?>
</body>
</html>
