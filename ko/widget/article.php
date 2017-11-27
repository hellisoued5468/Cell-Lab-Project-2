<article>
  <?php
    //If ID Parameter Have Value
    //Brings Article
    if(isset($_GET['id'])){
      $sql = 'SELECT * FROM topic WHERE id='.$_GET['id'];
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      echo
      '<h2>
         '.$row['title'].'
       </h2>
         <br>
       <footer>
         Written by '.$row['author'].
       '</footer>
         <br>'
         .$row['description'].
        '<br>
        <small>
         Created:'.$row['created'].
       '</small>';
//Else Calls Default
} else {
  echo "<h2>Welcome</h2> Happy Gaming!!";
}
?>
</article>
