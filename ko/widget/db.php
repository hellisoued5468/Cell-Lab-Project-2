<?php
// mysql -hlocalost -uroot -phelly6505
$conn = mysqli_connect("localhost", "root", "helly6505");
// use celllab;
mysqli_select_db($conn, "celllab_ko");
// SELECT * FROM topic;
$result = mysqli_query($conn, "SELECT * FROM topic")
 ?>
