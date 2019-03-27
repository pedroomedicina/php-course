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
        <form action="site.php" method="get">
            Name: <input type="text" name="username">
            <br>
            Age: <input type="number" name="age">
            <input type="submit">
        </form>
        <br>
        Your name is <?php echo $_GET["username"]?>
        <br>
        Your age is <?php echo $_GET["age"]?>

</body>
</html>
