<?php
 include('include/init.php');
  if(isset($_POST["id"])){
    $posts = displayCategory($_POST['id']); //All product posts from specific category
    $output = '';
    $modal = '';
    $action = '';
    $add = 0;
    $delete = 1;
    $allPosts = getAllProducts();
    
    if($_POST['id'] == 0) {
      if(verifyUser()) {
        $userId = $_SESSION["userId"];

      //This case is only for displaying Saved Items
      $savedPosts = getSavedPosts($_SESSION['userId']);
      foreach($savedPosts as $saved) {
        $prodId = $saved["productId"];
        $productId = $saved["productId"];
        $product = getProduct($prodId);
        $sellerId = $product["sellerId"];
        $user = getSeller($sellerId);
        $post = getProduct($prodId);
        $source = getProduct($prodId)['image']; //s3
        $title = $product["postingTitle"];
        $price = $product["price"];
        $location = $product["location"];
        $image = $product["image"];
        $output .= '
            <div class="col">
              <div class="card shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100" height="225" src="https://washulist.s3.amazonaws.com/'.$source.'" role="img" aria-label="Placeholder:" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100" height="100" fill="#55595c"/><text x="50" y="50" fill="#eceeef" dy=".3em">
                    <div class="card-body">
                      <p class="card-text ctitle">'.$title.'</p>
                      <p class="card-text">$'.$price.'</p>
                      <p class="card-text">'.$location.'</p>
                      <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                      <a href="#"> <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target=".bd-example-modal-lg'.$productId.'">View Item</button> </a>
                      <button onclick="savePost('.$userId.','.$prodId.', '.$delete.')" type="button" class="btn btn-sm btn-outline-secondary del" id="del">Remove</button>
                      </div><small class="text-body-secondary">WashUList</small>
                    <i class="fa-solid fa-star fa-lg"" style="color: #e0d024;"></i>
                  </div>
                </div>
            </div>
          </div>
        ';
      $source = $post["image"];
      $modal.= '<div class="modal fade bd-example-modal-lg'.$productId.'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div>
        <div class="topContainer"> 
            <div class="p-2 text-dark washu" href="#">WashUList- #1 Campus MarketPlace</div>
            <nav class="my-2 my-md-0 mr-md-3 cont">
                <a class="p-2 text-dark" href="index.php">Home</a>
                <a class="p-2 text-dark" href="index.php#FAQ">Features</a>
                <a class="p-2 text-dark" href="addPost.php">Add Posting</a>
            </nav>
        </div>
        </div>
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
          <h1 class="display-4">'.$post["postingTitle"].'</h1>
          <h2 class="time"> Tue, August 8th, 2023</h2>
          <p class="lead">'.$post["description"].'</p>
        </div>
        <div class="test">
         <img src="https://washulist.s3.amazonaws.com/'.$source.'" alt="Test">
        </div>
        <div class="test2">
            <div class ="child">
            Price: $'.$post["price"].'
            </div>
            <div class ="child">
            Condition: '.$post["productCondition"].'
            </div>
            <div class ="child">
            Location: '.$post["location"].'
            </div>
            <div class ="child">
            Delivery Available? '.$post["deliveryAvailable"].'
            </div>
        </div>
        <div class="test3">
          <div class="ch">
            Seller Phone Number: '.$user["phoneNumber"].'
          </div>
          <div class="ch">
            Seller Email Address: '.$user["email"].'
          </div>
        </div>
          <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
              <div class="col-12 col-md">
                <small class="d-block mb-3 text-muted">WashUList&copy; 2023</small>
              </div>
              <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="#">Cool stuff</a></li>
                  <li><a class="text-muted" href="#">Random feature</a></li>
                  <li><a class="text-muted" href="#">Team feature</a></li>
                  <li><a class="text-muted" href="#">Stuff for developers</a></li>
                  <li><a class="text-muted" href="#">Another one</a></li>
                  <li><a class="text-muted" href="#">Last time</a></li>
                </ul>
              </div>
              <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="#">Resource</a></li>
                  <li><a class="text-muted" href="#">Resource name</a></li>
                  <li><a class="text-muted" href="#">Another resource</a></li>
                  <li><a class="text-muted" href="#">Final resource</a></li>
                </ul>
              </div>
              <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="#">Team</a></li>
                  <li><a class="text-muted" href="#">Locations</a></li>
                  <li><a class="text-muted" href="#">Privacy</a></li>
                  <li><a class="text-muted" href="#">Terms</a></li>
                </ul>
              </div>
            </div>
          </footer>
        </div>
        </div>
      </div>
    </div>';
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
      
      if($_POST['id'] == 99) {
        foreach($allPosts as $post) {
          $productId = $post["productId"];
        $product = getProduct($productId);
        $sellerId = $product["sellerId"];
        $user = getSeller($sellerId);
        $source = getProduct($productId)['image']; //s3
        $output .= '
        
        <div class="col">
          <div class="card shadow-sm">
          <img class="bd-placeholder-img card-img-top" width="100" height="225" src="https://washulist.s3.amazonaws.com/'.$source.'" role="img" aria-label="Placeholder:" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100" height="100" fill="#55595c"/><text x="50" y="50" fill="#eceeef" dy=".3em">
          <div class="card-body">
            <p class="card-text ctitle">'.$post["postingTitle"].'</p>
            <p class="card-text">$'.$post["price"].'</p>
            <p class="card-text">'.$post["location"].'</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
            <a href="#"> <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target=".bd-example-modal-lg'.$productId.'">View Item</button> </a>
              <button onclick="savePost('.$userId.','.$productId.', '.$add.')" type="button" class="btn btn-sm btn-outline-secondary">Save Item</button>
            </div>
            <small class="text-body-secondary">WashUList</small>
            <i class="fa-solid fa-star fa-lg" id="'.$productId.'" style="color: #e0d024;" hidden></i>
          </div>
        </div>
      </div>
      </div>
        ';
      $source = $post["image"];
      $modal.= '<div class="modal fade bd-example-modal-lg'.$productId.'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div>
        <div class="topContainer"> 
            <div class="p-2 text-dark washu" href="#">WashUList- #1 Campus MarketPlace</div>
            <nav class="my-2 my-md-0 mr-md-3 cont">
                <a class="p-2 text-dark" href="index.php">Home</a>
                <a class="p-2 text-dark" href="index.php#FAQ">Features</a>
                <a class="p-2 text-dark" href="addPost.php">Add Posting</a>
            </nav>
        </div>
        </div>
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
          <h1 class="display-4">'.$post["postingTitle"].'</h1>
          <h2 class="time"> Tue, August 8th, 2023</h2>
          <p class="lead">'.$post["description"].'</p>
        </div>
        <div class="test">
         <img src="https://washulist.s3.amazonaws.com/'.$source.'" alt="Test">
        </div>
        <div class="test2">
            <div class ="child">
            Price: $'.$post["price"].'
            </div>
            <div class ="child">
            Condition: '.$post["productCondition"].'
            </div>
            <div class ="child">
            Location: '.$post["location"].'
            </div>
            <div class ="child">
            Delivery Available? '.$post["deliveryAvailable"].'
            </div>
        </div>
        <div class="test3">
        <div class="ch">
          Seller Phone Number: '.$user["phoneNumber"].'
        </div>
        <div class="ch">
          Seller Email Address: '.$user["email"].'
        </div>
      </div>
          <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
              <div class="col-12 col-md">
                <small class="d-block mb-3 text-muted">WashUList&copy; 2023</small>
              </div>
              <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="#">Cool stuff</a></li>
                  <li><a class="text-muted" href="#">Random feature</a></li>
                  <li><a class="text-muted" href="#">Team feature</a></li>
                  <li><a class="text-muted" href="#">Stuff for developers</a></li>
                  <li><a class="text-muted" href="#">Another one</a></li>
                  <li><a class="text-muted" href="#">Last time</a></li>
                </ul>
              </div>
              <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="#">Resource</a></li>
                  <li><a class="text-muted" href="#">Resource name</a></li>
                  <li><a class="text-muted" href="#">Another resource</a></li>
                  <li><a class="text-muted" href="#">Final resource</a></li>
                </ul>
              </div>
              <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="#">Team</a></li>
                  <li><a class="text-muted" href="#">Locations</a></li>
                  <li><a class="text-muted" href="#">Privacy</a></li>
                  <li><a class="text-muted" href="#">Terms</a></li>
                </ul>
              </div>
            </div>
          </footer>
        </div>
        </div>
      </div>
    </div>';
        }
      }


      foreach($posts as $post) {
        $productId = $post["productId"];
        $product = getProduct($productId);
        $sellerId = $product["sellerId"];
        $user = getSeller($sellerId);
        $source = getProduct($productId)['image']; //s3
        $output .= '
        
        <div class="col">
          <div class="card shadow-sm">
          <img class="bd-placeholder-img card-img-top" width="100" height="225" src="https://washulist.s3.amazonaws.com/'.$source.'" role="img" aria-label="Placeholder:" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100" height="100" fill="#55595c"/><text x="50" y="50" fill="#eceeef" dy=".3em">
          <div class="card-body">
            <p class="card-text ctitle">'.$post["postingTitle"].'</p>
            <p class="card-text">$'.$post["price"].'</p>
            <p class="card-text">'.$post["location"].'</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
            <a href="#"> <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target=".bd-example-modal-lg'.$productId.'">View Item</button> </a>
              <button onclick="savePost('.$userId.','.$productId.', '.$add.')" type="button" class="btn btn-sm btn-outline-secondary">Save Item</button>
            </div>
            <small class="text-body-secondary">WashUList</small>
            <i class="fa-solid fa-star fa-lg" id="'.$productId.'" style="color: #e0d024;" hidden></i>
          </div>
        </div>
      </div>
      </div>
        ';
      $source = $post["image"];
      $modal.= '<div class="modal fade bd-example-modal-lg'.$productId.'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div>
        <div class="topContainer"> 
            <div class="p-2 text-dark washu" href="#">WashUList- #1 Campus MarketPlace</div>
            <nav class="my-2 my-md-0 mr-md-3 cont">
            <a class="p-2 text-dark" href="index.php">Home</a>
            <a class="p-2 text-dark" href="index.php#FAQ">Features</a>
            <a class="p-2 text-dark" href="addPost.php">Add Posting</a>
            </nav>
        </div>
        </div>
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
          <h1 class="display-4">'.$post["postingTitle"].'</h1>
          <h2 class="time"> Tue, August 8th, 2023</h2>
          <p class="lead">'.$post["description"].'</p>
        </div>
        <div class="test">
         <img src="https://washulist.s3.amazonaws.com/'.$source.'" alt="Test">
        </div>
        <div class="test2">
            <div class ="child">
            Price: $'.$post["price"].'
            </div>
            <div class ="child">
            Condition: '.$post["productCondition"].'
            </div>
            <div class ="child">
            Location: '.$post["location"].'
            </div>
            <div class ="child">
            Delivery Available? '.$post["deliveryAvailable"].'
            </div>
        </div>
        <div class="test3">
        <div class="ch">
          Seller Phone Number: '.$user["phoneNumber"].'
        </div>
        <div class="ch">
          Seller Email Address: '.$user["email"].'
        </div>
      </div>
          <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
              <div class="col-12 col-md">
                <small class="d-block mb-3 text-muted">WashUList&copy; 2023</small>
              </div>
              <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="#">Cool stuff</a></li>
                  <li><a class="text-muted" href="#">Random feature</a></li>
                  <li><a class="text-muted" href="#">Team feature</a></li>
                  <li><a class="text-muted" href="#">Stuff for developers</a></li>
                  <li><a class="text-muted" href="#">Another one</a></li>
                  <li><a class="text-muted" href="#">Last time</a></li>
                </ul>
              </div>
              <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="#">Resource</a></li>
                  <li><a class="text-muted" href="#">Resource name</a></li>
                  <li><a class="text-muted" href="#">Another resource</a></li>
                  <li><a class="text-muted" href="#">Final resource</a></li>
                </ul>
              </div>
              <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="#">Team</a></li>
                  <li><a class="text-muted" href="#">Locations</a></li>
                  <li><a class="text-muted" href="#">Privacy</a></li>
                  <li><a class="text-muted" href="#">Terms</a></li>
                </ul>
              </div>
            </div>
          </footer>
        </div>
        </div>
      </div>
    </div>';
      }

      echo "
      <div class='album py-5 bg-body-tertiary'>
          <div class='container'>
          <div class='row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3' id='myDIV'>
          ";


      echo $output;
      echo $modal;

   }
?>

