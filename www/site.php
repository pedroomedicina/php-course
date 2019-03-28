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
    class Movie {
      public $title; //public & var are interchangeable
      private $rating; //any code outside the class, isn't gonna be able to reach this directly.

      function __construct($title, $rating){
        $this->title = $title;
        $this->setRating($rating);
      }

      function getRating(){
        return $this->rating;
      }

      function setRating($rating){
        if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR"){
          $this->rating = $rating;
        }else{
          $this->rating = "NR";
        }
      }

    }

    $avengers = new Movie("Avengers", "Dog");
      //possible ratings: G, PG, PG-13, R, NR
    
    $avengers->setRating("Dog");
    echo $avengers->getRating();
  
  ?>
</body>
</html>
