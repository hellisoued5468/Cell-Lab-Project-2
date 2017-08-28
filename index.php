<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
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
  </body>
</html>
