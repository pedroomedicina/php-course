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

    $index = 1;
    while($index <= 5){
      echo "$index <br>";
      $index++;
    }

    //be aware of infinite loops

    $index = 6;
    do{
      echo "$index <br>";
      $index++;
    } while($index <=5);
  ?>
</body>
</html>
