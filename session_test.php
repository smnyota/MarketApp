<?php

include('include/init.php');

debugOutput($_SESSION);


//this will lay the groundwork for a login/password
//set the userId to session for a login

$thisUser = getUser($_SESSION['userId']);

echo "
    <p>Name: ".$thisUser['firstName']."</p>
    <p>UserName: ".$thisUser['username']."</p>
    <a href = 'session_test2.php'> Go Back <a>

";