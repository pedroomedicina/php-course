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
    echo 40; //positive int
    echo <br>;
    echo -40; //negative int
    echo <br>;
    echo -40.864; //negative floating point number
    echo <br>;
    //perform arithmetics
    echo 9 + 5;
    echo <br>;
    echo 9 - 5;
    echo <br>;
    echo 9 / 5;
    echo <br>;
    echo 9 * 5.7;
    echo <br>;
    echo (4 + 5) * 10;
    echo <br>;
    //even modulus
    echo 10 % 3; //getting the remainder printed
    echo <br>;
    
    $num = 10;
    echo <br>;
    echo $num;
    echo <br>;
    $numm++;
    echo <br>;
    echo $num;
    echo <br>;
    $numm--;
    echo <br>;
    echo $num;
    echo <br>;
    $num += 25;
    echo <br>;
    $num *= 20;
    echo <br>;
    $num -= 120;
    echo <br>;

    echo abs(-400); //absolute value
    echo <br>;
    echo pow(2, 4); //power
    echo <br>;
    echo sqrt(144); //square root
    echo <br>;
    echo max(2, 10); //max between 2 num
    echo <br>;
    echo min(2, 10); //min between 2 num
    echo <br>;
    echo round (2.3);
    echo <br>;
    echo ceil (3.3); //round up
    echo <br>;
    echo floor (3.3); //round down
    //dozens and dozens of math functions
    ?>

</body>
</html>
