<ol>
<?php
while ($row = mysqli_fetch_assoc($result)){
  //var_dump($row);
  echo '<li><a href="http://localhost?id='.$row['id'].'">'.$row['title'].'</a></li>';
}
?>
</ol>
