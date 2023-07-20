<?php
 include('include/init.php');
  if(isset($_POST["id"])){
    $posts = displayCategory($_POST['id']); //All product posts from specific category
    $output = '';
    $action = '';
    $add = 0;
    $delete = 1;
    
    if($_POST['id'] == 0) {
      if(verifyUser()) {
        $userId = $_SESSION["userId"];

      //This case is only for displaying Saved Items
      $savedPosts = getSavedPosts($_SESSION['userId']);
      foreach($savedPosts as $saved) {
        $prodId = $saved["productId"];
        $product = getProduct($prodId);
        $title = $product["postingTitle"];
        $price = $product["price"];
        $location = $product["location"];
        $image = $product["image"];
        $output .= '
          <div class="col">
            <div class="card shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="'.$image.'" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></img>
                <div class="card-body">
                  <p class="card-text">'.$title.'</p>
                  <p class="card-text">'.$price.'</p>
                  <p class="card-text">'.$location.'</p>
                  <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="description.php?productId='.$prodId.'"> <button type="button" class="btn btn-sm btn-outline-secondary">View Item</button> </a>
                      <button onclick="savePost('.$userId.','.$prodId.', '.$delete.')" type="button" class="btn btn-sm btn-outline-secondary del" id="del">Remove Item</button>
                  </div><small class="text-body-secondary">WashUList</small></div>
                </div>
            </div>
          </div>
        ';
      }

        } else {
          //Case that the user clicks on the Saved Items section header but is not logged in
          $output = '<h1>Login to see Your Saved Items!</h1>';
        }
      }

      if(verifyUser()) {
        $userLoggedIn = "true";
        $userId = $_SESSION["userId"];
        // $productId = $posts["productId"];
      } else {
        $userLoggedIn = "false";
        $userId = 0;
      }

      foreach($posts as $post) {
        $productId = $post["productId"];
        $output .= '
        <div class="col">
          <div class="card shadow-sm">
          <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="'.$post["image"].'" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></img>
          <div class="card-body">
            <p class="card-text">'.$post["postingTitle"].'</p>
            <p class="card-text">'.$post["price"].'</p>
            <p class="card-text">'.$post["location"].'</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
            <a href="description.php?productId='.$post['productId'].'"> <button type="button" class="btn btn-sm btn-outline-secondary">View Item</button> </a>
              <button onclick="savePost('.$userId.','.$productId.', '.$add.')" type="button" class="btn btn-sm btn-outline-secondary">Save Item</button>
            </div>
            <small class="text-body-secondary">WashUList</small>
          </div>
        </div>
      </div>
      </div>
        ';
      }

      echo "
      <div class='album py-5 bg-body-tertiary'>
          <div class='container'>
          <div class='row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3' id='myDIV'>
          ";

      echo $output;
   }
?>

