<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <title>CellLab Wiki</title>
    <?php
      require "widget/DB.php";
     ?>
  </head>
  <body>
    <?php
    require 'widget/header.php';
     ?>
    <nav>
      <?php
      require "widget/list.php";
       ?>
    </nav>
      <?php
      require "widget/article.php";
     ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  </body>
</html>
