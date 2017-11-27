<!DOCTYPE html>
<html lang="ko">
  <head>
    <div class="others">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, length=device-length, initial-scale=1">
    </div>
    <div class="site-verification">
      <meta name="google-site-verification" content="4-3hu8RWpXQsfizZXweV6rI1oC1yQxPIsxCDlT3kd_M" />
      <meta name="naver-site-verification" content="5d53a9a1d2540aef8081ee90b473b941a70631e7"/>
    </div>
    <div class="link-stylesheet">
      <link rel="stylesheet" href="http://cell-lab.kro.kr/style.css">
      <link rel="stylesheet" href="http://cell-lab.kro.kr/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    </div>
    <title>CellLab 위키</title>
    <?php
      require '/widget/db.php';
     ?>
  </head>
  <body>
      <?php
      require '/widget/header.php';
       ?>
    <nav>
      <?php
      require "/widget/list.php";
       ?>
    </nav>
      <?php
      require "/widget/article.php";
     ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://localhost/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  </body>
</html>
