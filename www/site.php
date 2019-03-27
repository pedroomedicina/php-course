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
          Password: <input type="text" name="password"> <br>
          <input type="submit">
        </form>

        <?php
        echo $_POST["password"];
        ?>

</body>
</html>
