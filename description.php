<?php
include "dbconnection.php";

$sql = mysqli_query($conn, 'SELECT * FROM bookYouNeed');
  while ($result = mysqli_fetch_array($sql)) {
    echo '<li>'.'<a class="goods" href="product.php?product_id=1">'.'<h3>'.$result['name'].'</h3>'.'<span class="price">'.'<del>'.$result['price'].'</del>'.$result['price'].'</span>'.'<img src="'.$result['picture'].'" width="100" height="120">'.'</a>'.'</li>';
  }

  
?>