<?php
 include('include/init.php');
?>
<h1>Product Description</h1>

 <?php
 if (array_key_exists("productId",$_REQUEST)) {
    echo"<img src='images/placeholder.png' alt='' style='width:10rem'>";
      $product = getProduct($_REQUEST["productId"]);
      echo $product['postingTitle'];
      echo $product['price'];
      echo $product['description'];
      echo $product['productCondition'];
      echo $product['location'];
      echo $product['postalCode'];
      echo $product['deliveryAvailable'];
      echo $product['datePosted'];
 }
else
 {
 
 die("redirect to display post page");
 }

 ?>
