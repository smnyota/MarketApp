<?php
    date_default_timezone_set('America/Chicago');
    //cook
    session_start();
    include('include/connect.php');
    include('include/db_query.php');
    include('include/common_components.php');
    include('include/posts.php');
    include('include/helper_functions.php');
    include('include/comments.php');
    include('include/user.php');
    echo "Im here";
    ?>