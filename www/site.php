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
      <!--  <form action="site.php" method="post">
          <input type="text" name="student">
          <input type="submit">
        </form> -->

        <?php
          function cube($num){
            return $num * $num * $num;
            //the following code will never be excecuted
            //because of return statement.
            echo "Hello World";
          }

          $cubeResult = cube(4);
          echo $cubeResult;
        ?>
</body>
</html>
