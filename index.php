<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <title>CellLab Wiki</title>

    <?php
    //php Head Zone
      require("widget/DB.php")
     ?>
  </head>
    <body>

      <header>
        <a href="index.php"><h1>CellLab Wiki</h1></a>
      </header>
      <nav>
        <?php
        //Brings List Widget
        require "widget/list.php";
         ?>
      </nav>
      <article>
        <?php
        //Brings Article Widget
        require "widget/article.php";
       ?>
    </article>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  </body>
</html>
