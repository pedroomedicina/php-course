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

      function __construct($aTitle, $aAuthor, $aPages){
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->pages = $aPages;
      }
    }

    //here we have an object a.k.a. class instance
    $book1 = new Book("Harry Potter", "JK Rowlings", 400);

    echo "$book1->title <br>";

    $book2 = new Book("Lord Of the Rings", "Tolkien", 700);

    echo "$book2->author <br>";
  ?>
</body>
</html>
