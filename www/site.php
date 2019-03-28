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
    class Chef {
      function makeChicken(){
        echo "The chef makes chicken <br>";
      }
      function makeSalad(){
        echo "The chef makes salad <br>";
      }
      function makeSpecialDish(){
        echo "The chef makes bbq ribs <br>";
      }
    }

    class ItalianChef extends Chef {

      function makePasta(){
        echo "The chef makes pasta <br>";
      }

      function makeSpecialDish(){
        echo "The chef makes chicken parm<br>";
      }

    }

    $chef = new Chef();
    $chef->makeSpecialDish();

    $italianChef = new ItalianChef();
    $italianChef->makeSpecialDish();

  ?>
</body>
</html>
