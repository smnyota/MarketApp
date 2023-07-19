<?php
    date_default_timezone_set('America/Chicago');
    //cook
    session_start();
    // $_SESSION['userId'] = 1;
    include('include/connect.php');
    include('include/db_query.php');
    include('include/helper_functions.php');
    include('include/comments.php');
    include('include/user.php');
    echo "Im here";
    include('include/product.php');
    include('include/common_components.php');
    ?>