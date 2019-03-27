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
    $friends = array('Kevin','Karen','Oscar','Jim');
    $friends[10] = "Dwight";
    echo $friends[10];
    echo '<br>';
    echo count($friends); //counts 5 elements 
    //although we are adding a tenth position
    //to the array
  ?>
</body>
</html>
