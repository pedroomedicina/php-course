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
    
    <?php //this all are tests for different functions
        $phrase = "Giraffe Academy";
        echo strtolower($phrase);
        echo "<br>";
        echo strtoupper($phrase);
        echo "<br>";
        echo strlen($phrase);
        echo "<br>";
        echo ("$phrase[0]<br>");
        $phrase[0] = "B";
        echo ("$phrase<br>");
        echo str_replace("ffe", "Panda", $phrase);
        echo substr($phrase, 8, 3);

    ?>

</body>
</html>
