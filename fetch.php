<?php
 include('include/init.php');
 ?>
<?php
  if(isset($_POST["id"])){
    $posts = displayCategory($_POST['id']); //All product posts from specific category
    
    // $savedPosts = getSavedPosts($_SESSION['userId']);
   
    // debugOutput($savedPosts);
    $output = '';
    $customOutput = '';
    // $customOutput = '';
    if($_POST['id'] == 0) {
      if(array_key_exists("userId", $_SESSION)) {
        $savedPosts = getSavedPosts($_SESSION['userId']);

  //This case is only for displaying Saved Items
      foreach($savedPosts as $saved) {
    
        $prodId = $saved["productId"];
        $product = getProduct($prodId);
        $title = $product["postingTitle"];
        $price = $product["price"];
        $location = $product["location"];
        
    $customOutput .= '
    <div class="col">
      <div class="card shadow-sm">
      <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/images/placeholder.png" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
      <div class="card-body">
        <p class="card-text">'.$title.'</p>
        <p class="card-text">'.$price.'</p>
        <p class="card-text">'.$location.'</p>
        <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
        <a href="description.php?productId='.$prodId.'"> <button type="button" class="btn btn-sm btn-outline-secondary">View Item</button> </a>
          <button type="button" class="btn btn-sm btn-outline-secondary">Remove Item</button>
        </div>
        <small class="text-body-secondary">WashUList</small>
      </div>
    </div>
  </div>
  </div>
    ';

    // debugOutput($customOutput);
  }

} else {

  //Case that the user clicks on the Saved Items section header but is not logged in
  $customOutput = '<h1>Login to see Your Saved Items!</h1>';

}

 }
   
  if(array_key_exists("userId", $_SESSION)) {
    $userLoggedIn = "true";
    $userId = $_SESSION["userId"];
    // $productId = $posts["productId"];
  } else {
    $userLoggedIn = "false";
    $userId = 0;
  }

  foreach($posts as $post)
  {
    $productId = $post["productId"];

    $output .= '
    <div class="col">
      <div class="card shadow-sm">
      <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/images/placeholder.png" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
      <div class="card-body">
        <p class="card-text">'.$post["postingTitle"].'</p>
        <p class="card-text">'.$post["price"].'</p>
        <p class="card-text">'.$post["location"].'</p>
        <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
        <a href="description.php?productId='.$post['productId'].'"> <button type="button" class="btn btn-sm btn-outline-secondary">View Item</button> </a>
          <button onclick="savePost('.$userLoggedIn.','.$userId.','.$productId.')" type="button" class="btn btn-sm btn-outline-secondary">Save Item</button>
        </div>
        <small class="text-body-secondary">WashUList</small>
      </div>
    </div>
  </div>
  </div>


  <script type="text/javascript">
	
	function savePost(userLoggedIn, userId, productId){
    console.log(userLoggedIn);
    if(userLoggedIn == true){
		// URL to which the AJAX call will be made
		const url = "/playground2.php";

		// Data object containing the POST parameters
		let data = new URLSearchParams();
        data.append("userId",userId);
        data.append("productId",productId);

		// Options for the AJAX call
		const options = {
		method: "POST",
		body: data,
		};

		// Making the AJAX call
		fetch(url, options)
		.then(response => {
			return response.text(); 
		})
		.then(data => {
			// Might add a star icon next to the save item button on the card in this case
			
		})
		.catch(error => {
			// Handle any errors that occurred during the AJAX call
			console.error("Error:", error);
		}); 
  } else {
    //delete these logs once done testing
    console.log("not logged in");
    console.log("here is the prob:");
    console.log(userLoggedIn == true);
  }

  } 
	
</script>

    ';
  }

  echo "
  <div class='album py-5 bg-body-tertiary'>
      <div class='container'>
      <div class='row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3' id='myDIV'>";


  if($_POST['id'] == 0) {
    //Saved posts case
    echo $customOutput;
  } else  {
    //Every other case 
    echo $output;
  }
  


  }
?>