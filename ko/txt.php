<html lang="ko">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
    $filename = $_POST['filename'].".txt";
    if (file_exists($filename)){
      echo '이미 존재하는 파일명입니다.';
  } else {
      echo $_POST['filename'].'이(가) 발송되었습니다.';
      file_put_contents($filename, $_POST['text']);
    }
    ?>
    <a class="btn btn-default" href="filepush.html" role="button">메세지 더 보내기</a>
    <a class="btn btn-default" href="index.php" role="button">돌아가기</a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://localhost/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  </body>
</html>
