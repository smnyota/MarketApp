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
        <!--Google Custom Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
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



function verifyUser() {
    return array_key_exists("userId", $_SESSION);
}

function redirectUser($redirectUrl) {
    if(!verifyUser()) {
        header("Location: $redirectUrl");
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

function echoFooter() {
    echo '
    <!-- FOOTER -->
    <footer class="container">
      <p class="float-right"><a href="#">Back to top</a></p>
      <!--Trademark and middledot logo -->
      <p>&copy; WashUList &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p> <!--May link a page for these for later-->
    </footer>
  </html>
  
  
  <!-- Bootsrap inherited JS file-->
  <script src="/examples/assets/dist/js/bootstrap.bundle.min.js"></script>
        ';
}