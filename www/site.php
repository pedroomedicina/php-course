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
    What was your grade?<br>
    <input type="text" name="grade">
    <input type='submit'>
  </form>
  <?php
    $grade = $_POST['grade'];
    switch($grade){
      case "A":
      echo "You did amazing!";
      break;
      case "B":
      echo "You did pretty good";
      break;
      case "C":
      echo "You did poorly";
      break;
      case "D":
      echo "You did very bad";
      break;
      case "F":
      echo "YOU FAIL!";
      break;
      default:
      echo "Invalid Grade";
    }
  ?>
</body>
</html>
