<?php
include('include/init.php');
echoHeader();
?>
<main>
 <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="" class="d-inline-flex link-body-emphasis text-decoration-none">
          <img src="/images/random.png" width ="230" height = "56" class = 'specific' alt="Picture">
        </a>
      </div>
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2">Home</a></li>
        <li><a href="#" class="nav-link px-2 link-secondary">Shop</a></li>
        <li><a href="#" class="nav-link px-2">Features</a></li>
        <li><a href="#" class="nav-link px-2">FAQs</a></li>
        <li><a href="#" class="nav-link px-2">About</a></li>
      </ul>
      <div class="col-md-3 text-end">
        <!-- <button type="button" class="btn btn-outline-primary me-2">Login</button> -->
        <a href="sign-in.php"><button type="button" class="btn btn-primary">Login</button></a>
        <a href="addPost.php"><button type="button" class="btn btn-primary">Create Posting</button></a>
        <a href="register.php"><button type="button" class="btn btn-primary">Sign-up</button></a>
      </div>
    </header>
  </div>
</main>
<!--SECOND HEADER-->
<div class = "blackHeader">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
          <ul class="nav navbar-nav">
        <?php
        echo '
        <li class="nav-item" id="0">
        <a class="nav-link active" aria-current="page" href="#">Saved Items</a>
        </li>
        ';
        $Categories = getAllCategoryNames();
        foreach($Categories as $category)
        {
        echo '
        <li class="nav-item" id="'.$category["categoryId"].'">
        <a class="nav-link active" aria-current="page" href="#">'.$category["categoryName"].'</a>
        </li>
        ';
        }
        ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<input class="form-control" id="myInput" type="text" placeholder="Search..">
<div class='album py-5 bg-body-tertiary'>
      <div class='container'>
      <div class='row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3' id='myDIV'>
<span id="page_details"></span>
</div>

</html>

<!--Jquery ajax -->
<script>
$(document).ready(function(){
 function load_page_details(id){
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{id:id},
   success:function(data)
   {
    $('#page_details').html(data);
   }
  });
 }
 //Defaults to loading page id=1 first (Appliances)
 load_page_details(1);

 $('.nav li').click(function(){
  var page_id = $(this).attr("id");
  load_page_details(page_id);
 });
 
 
});
</script> 


<!--Jquery case insensitive search-->
<script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myDIV .col").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  </script>


<!--When user presses saved posts button, ajax call is made to savedPost.php to add the specific post to the savedPost database table-->
<script type="text/javascript">
	function savePost(userLoggedIn, userId, productId){
    console.log(userLoggedIn);
    if(userLoggedIn == true){
		// URL to which the AJAX call will be made
		const url = "/savedPost.php";

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
    //Test Case
    console.log("not logged in");
  }

  } 
	
</script>

