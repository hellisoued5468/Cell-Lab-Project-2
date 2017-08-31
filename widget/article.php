<article>
  <?php
    //If ID Parameter Have Value
    //Brings Article
    if(isset($_POST['id'])){
      $sql = 'SELECT * FROM topic WHERE id='.$_POST['id'];
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      echo '<h2>'.$row['title'].'</h2>';
      echo'<br>';
      echo $row['description'];
//Else
//Calls Default
} else {
  ?>
  <h2>Welcome</h2>
  Happy Gaming!!
  <?php
}
?>
</article>
