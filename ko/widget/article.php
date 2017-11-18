<article>
  <?php
    //If ID Parameter Have Value
    //Brings Article
    if(isset($_GET['id'])){
      $sql = 'SELECT * FROM topic WHERE id='.$_GET['id'];
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      require 'article.html';
//Else Calls Default
} else {
  ?>
  <h2>Welcome</h2>
  Happy Gaming!!
  <?php
}
?>
</article>
