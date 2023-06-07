<?php
include('include/init.php');
echo 'All of the products';
//List of All products in Database
debugOutput(getAllProducts());

debugOutput(getProduct(2));

insertProduct('Test', 23, 'The best thing ever', 3, 'Hurd House', 22344, 'Clothes', 'Yes', 'New');

$ver = verifyUser('johndoe@gmail.com', '333-444-5555');

debugOutput($ver);