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
    class Book { //here we have defined a class
      var $title;
      var $author;
      var $pages;
    }

    //here we have an object a.k.a. class instance
    $book1 = new Book; 
    $book1->title = "Harry Potter";
    $book1->author = "JK Rowlings";
    $book1->pages = 400;

    echo "$book1->author <br>";

    $book2 = new Book; 
    $book2->title = "Lord Of the Rings";
    $book2->author = "Tolkien";
    $book2->pages = 700;

    echo "$book2->author <br>";
  ?>
</body>
</html>
