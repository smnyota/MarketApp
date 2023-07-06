<?php
    include('include/init.php');
    //redirects unlogged in users to the login page
    if(!array_key_exists('userId', $_SESSION)) {
        header("Location: sign-in.php?location=addPost");
        exit();
    } 
    if(isset($_POST['postItem'])) {
        //redirect User's who have not logged in to the login page
        $postingTitle = $_POST['postingTitle'];
        $price = $_POST['price'];
        $location = $_POST['location'];
        $zipCode = $_POST['zipCode'];
        $description = $_POST['description'];
        $conditionInput = $_POST['conditionInput'];
        $categoryInput = $_POST['categoryInput'];
        // $imageFile = $_POST['fileToUpload']; //Currently there is no image file support atm (S3 In the Future)
        if (isset($_POST['deliveredInput'])) {
            $deliveryAvailable = 'Yes';
        } else {
            $deliveryAvailable = 'No';
        }
     
        $sellerId = $_SESSION['userId'];
        insertProduct($postingTitle, $price, $description, $sellerId, $location, $zipCode, $categoryInput, $deliveryAvailable, $conditionInput);
        //Will need to adjust this insertion process: delte the Category name!!
    }
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>WashUList</title>

    <!--Currently Working on Cleaning Up Stylesheets-->
     <!-- Font awesome Icon CDN -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
     <!--Still Need To Refactor this CSS-->
     <link rel="stylesheet" href="searchbar.css" />
     <link href="/examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="/carousel.css" rel="stylesheet">
     <link href="/examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- Finished Refactoring This CSS -->
     <link href="headers.css" rel="stylesheet">
     <link href="style.css" rel="stylesheet">
     <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
<body>
  <main>
    <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
          <a href="" class="d-inline-flex link-body-emphasis text-decoration-none">
            <img src="/images/random.png" width ="230" height = "56" class = 'specific' alt="Picture">
          </a>
        </div>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2">Shop</a></li>
          <li><a href="#" class="nav-link px-2">Features</a></li>
          <li><a href="#" class="nav-link px-2">FAQs</a></li>
          <li><a href="#" class="nav-link px-2">About</a></li>
        </ul>

        <div class="col-md-3 text-end">
          <!-- <button type="button" class="btn btn-outline-primary me-2">Login</button> -->
        <?php echo '<a href="logout.php"><button type="button" class="btn btn-primary">Logout</button></a>';?>
          <!-- <a href="register.php"><button type="button" class="btn btn-primary">Home</button></a> -->
        </div>
        <!--Search Bar Start-->
        <!--Search Bar will likely be removed from this page, it's nice for asthetic desgin but not too practical imo-->
        <div class = 'search-bar'>
          <div class = 'dropdown'>
                  <div id = "drop-text" class = 'dropdown-text'>
                      <span id = "span">All Categories</span>
                      <i id = "icon" class="fa-solid fa-chevron-down"></i>
                  </div>
                  <ul id="list" class="dropdown-list">
                      <li class="dropdown-list-item">All Categories</li>
                      <li class="dropdown-list-item">Appliances</li>
                      <li class="dropdown-list-item">Books, Movies, & Music</li>
                      <li class="dropdown-list-item">Clothing, Shoes, & Accessories</li>
                      <li class="dropdown-list-item">Electronics</li>
                      <li class="dropdown-list-item">Health & Beauty</li>
                      <li class="dropdown-list-item">Pet Supplies</li>
                      <li class="dropdown-list-item">Miscellaneous</li>
                  </ul>  
          </div>
          <!--Dropdown ends-->
          <div class=" search-box">
              <input type="text" id="search-input" placeholder="Search in All Categories...">
              <i class="fa-solid fa-magnifying-glass"></i>

          </div>
        </div>
    <!--Search bar ends also don't forget to remove sear-->
        <script src="searchbar.js"></script>
      </header>
    </div>
  </main>
<!--SECOND HEADER-->
<div class = "blackHeader">
  <!--Might add stickytop: style preference-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">All Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Recently Viewed</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Appliances</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Books, Movies, & Music</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Clothing, Shoes, & Accessories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Electronics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Health & Beauty</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Miscellaneous</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Pet Supplies</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<div>
  <form action="" method = 'post'> 
      <div class = 'flexContainer'>
        <div class = 'row1Container'>
            <div class = 'row1'>
                <div class="label">Posting Title</div>
                <input type="text" class = 'field' name = 'postingTitle' placeholder = 'ex: MiniFridge' required><br/>
            </div>
            <div class = 'row1'>
                <div class="label">Price</div>
                $<input type="number" class = 'field' name = 'price' placeholder = '' required><br/>
            </div>
            <div class = 'row1'>
                <div class="label">Location</div>
                <input type="text" class = 'field' name = 'location' placeholder = 'ex: Umrath Dorm' required><br/>
            </div>
            <div class = 'row1'>
                <div class="label">ZipCode</div>
                <input type="text" class = 'field' name = 'zipCode' placeholder = '' required><br/>
            </div>
        </div>
        <div class = 'row2Container'>
            <div class = 'row2'>
                <div class="label">Description</div>
                <textarea name="description" rows="10" cols="80"></textarea>
            </div>
        </div>
        <div class = 'row3Container'>
            <fieldset class=''>
                <legend>Posting Details</legend>
                    <div class = 'row3ContainerInnerFieldSet'>
                        <div class = 'row3'>
                            <div class = 'column1'>
                              <label for="conditionInput">Condition</label><br/>
                                      <select name="conditionInput">
                                          <option value="-" hidden>Choose Condition</option> 
                                          <option value ="Brand New">Brand New</option>
                                          <option value="Like New">Like New</option>
                                          <option value="Good">Good</option>
                                          <option value="Fair">Fair</option>
                                          <option value="Salvage">Salvage</option>
                                      </select>
                            </div>
                        </div>
                        <div class = 'row3'>
                            <div class = 'column2'>
                              <label for="categoryInput">Category</label><br/>
                                  <select name="categoryInput" id="">
                                      <option value="-" hidden>Choose Category</option> 
                                      <option value="1">Appliances</option>
                                      <option value="2">Books, movies, & Music</option>
                                      <option value="3">Clothing, Shoes, & Accessories</option>
                                      <option value="4">Electronics</option>
                                      <option value="5">Health & Beauty</option>
                                      <option value="6">Miscellaneous</option>
                                      <option value="7">Pet Supplies</option>
                                  </select>
                            </div>
                        </div>
                        <div class = 'row3'>
                            <div class = 'column3'>
                                <input type="checkbox" id="" name="deliveredInput" value="">
                                <label for="">Delivery Available</label><br>
                                <input type="checkbox" id="" name="contactOkInput" value="">
                                <label for="">Ok for others to contact you about other products or services posted</label><br>
                                <input type="file" name = 'fileToUpload'>Upload Image 
                            </div>
                        </div>
                    </div>
            </fieldset>
        </div>
        <input type="submit" class = 'submitButton' name = 'postItem' value = 'Submit'>
      </div>
    </form>
  </body>
</html>

    




