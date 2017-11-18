<!DOCTYPE html>
<html lang="ko">
  <head>
    <div class="others">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </div>
    <div class="site-verification">
      <meta name="google-site-verification" content="4-3hu8RWpXQsfizZXweV6rI1oC1yQxPIsxCDlT3kd_M" />
      <meta name="naver-site-verification" content="5d53a9a1d2540aef8081ee90b473b941a70631e7"/>
    </div>
    <div class="link-stylesheet">
      <link rel="stylesheet" href="http://localhost/style.css">
      <link rel="stylesheet" href="http://localhost/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    </div>
    <title>CellLab Wiki</title>
    <?php
    // mysql -hlocalost -uroot -phelly6505
    $conn = mysqli_connect("localhost", "root", "helly6505");
    // use celllab;
    mysqli_select_db($conn, "celllab");
    // SELECT * FROM topic;
    $result = mysqli_query($conn, "SELECT * FROM topic")
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
    <script src="http://localhost/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  </body>
</html>
<a class="btn btn-default" href="/filepush.html" role="button">개발자에게 텍스트보내기(영어만요!제발!)</a>
