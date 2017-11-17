<html lang="ko">
<meta charset="utf-8">
<?php
echo $_POST['text'].'이(가) 발송되었습니다.';
$file = './mail.txt';
file_put_contents($file, $_POST['text']);
?>
</html>
