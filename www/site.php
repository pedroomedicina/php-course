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

        <?php
          $isMale = false;
          $isTall = false;
          //with and operator
          if($isMale && $isTall){
            echo "You are a tall male<br>";
          } else {
            echo "Etiher you are not male or you are not tall, or both<br>";
          }
          //with or operator
          if($isMale || $isTall){
            echo "You are male or tall, or both<br>";
          } else {
            echo "You aren't either male or tall<br>";
          }
          //Using elseif statements
          if($isMale && $isTall){
            echo "You are a tall male<br>";
          } elseif ($isMale && !$isTall){
            echo "You are a short male<br>";
          } elseif(!$isMale && $isTall){
            echo "You aren't male but are tall<br>";
          }else {
            echo "You are not male and not tall<br>";
          }
        ?>
</body>
</html>
