<?php

function echoHeader() {
    echo '
    <!doctype html>
    <html lang="en" data-bs-theme="auto">
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WashUList</title>
        <!-- Font awesome Icon CDN -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
      <link rel="stylesheet" href="searchbar.css" />
      <link href="/examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="/carousel.css" rel="stylesheet">
      <link href="/examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
      <link href="headers.css" rel="stylesheet">
      <link href="style.css" rel="stylesheet">

        <!--Google Custom Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
      <!--Font Awesome -->
      <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

        </head>
        ';
}

function echoPosting() {
    echo '
    <!doctype html>
    <html lang="en" data-bs-theme="auto">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <head>
        <title>WashUList</title>
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
        </head>
        ';
}

function echoBlackNavBar() {
    echo '
    <!--SECOND HEADER-->
    <div class = "blackHeader">
      <!--May need to remove stickytop: style preference-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="viewproduct.php?categoryId=0">Saved Items</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="viewproduct.php">All Posts</a>
              </li>
              <li class="nav-item">
                <button class="nav-link active" aria-current="page" href="viewproduct.php?categoryId=1">Appliances</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="viewproduct.php?categoryId=2">Books, Movies, & Music</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="viewproduct.php?categoryId=3">Clothing, Shoes, & Accessories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="viewproduct.php?categoryId=4">Electronics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="viewproduct.php?categoryId=5">Health & Beauty</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="viewproduct.php?categoryId=6">Miscellaneous</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="viewproduct.php?categoryId=7">Pet Supplies</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    ';
}



function verifyUser() {
    return array_key_exists("userId", $_SESSION);
}

//Decided to redirect with js reason: AWS seems to be messing with the headers which PHP does not like
function redirectIfNotLoggedIn($URL) {
  
    if(!verifyUser()) {
      echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
      echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
        exit();
    } else {
        return $_SESSION['userId'];
    }
}

function echoUserHeader() {
    echo '
    <!doctype html>
    <html lang="en" data-bs-theme="auto">
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WashUList Sign-In</title>
        <link href="/examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="sign-in.css" rel="stylesheet">
        </head>
        ';
}

function echoMainHeader() {

   echo '
   <main>
 <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="index.php" class="d-inline-flex link-body-emphasis text-decoration-none">
          <img src="/images/random.png" width ="230" height = "56" class = "specific" alt="Picture">
        </a>
      </div>
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php" class="nav-link px-2">Home</a></li>
        <li><a href="viewproduct.php" class="nav-link px-2 link-secondary">Shop</a></li>
        <li><a href="index.php#FAQ" class="nav-link px-2">Features</a></li>
        <li><a href="#" class="nav-link px-2">FAQs</a></li>
        <li><a href="#" class="nav-link px-2">About</a></li>
      </ul>
      <div class="col-md-3 text-end">
      ';
          if (verifyUser()) {
            echo '
                  <a href="logout.php"><button type="button" class="btn btn-primary">Logout</button></a>
                  <a href="addPost.php"><button type="button" class="btn btn-primary">Add Posting</button></a>
                  <a href="register.php"><button type="button" class="btn btn-primary">New User</button></a>
                ';
          } else {
            echo '
                <a href="sign-in.php"><button type="button" class="btn btn-primary">Login</button></a>
                <a href="addPost.php"><button type="button" class="btn btn-primary">Add Posting</button></a>
                <a href="register.php"><button type="button" class="btn btn-primary">Sign-up</button></a>
                ';
          }
          echo '
      </div>
    </header>
  </div>
</main>
        ';
}


function echoDynamicBlackHeader() {
    echo '
    <div class = "blackHeader">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
          <ul class="nav navbar-nav">
          ';
        echo '
        <li class="nav-item" id="0">
        <a class="nav-link active" aria-current="page" href="#">Saved Items</a>
        </li>
        <li class="nav-item" id="99">
        <a class="nav-link active" aria-current="page" href="#">All Items</a>
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
        echo '
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
    ';
}

function echoFooter() {
    echo '
    <!-- FOOTER -->
    <footer class="container">
      <p class="float-right"><a href="#">Back to top</a></p>
      <!--Trademark and middledot logo -->
      <p>&copy; WashUList &middot; <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Privacy</a> &middot; <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Terms</a></p> <!--May link a page for these for later-->
    </footer>
  </html>
  
  
  <!-- Bootsrap inherited JS file-->
  <script src="/examples/assets/dist/js/bootstrap.bundle.min.js"></script>
        ';
}