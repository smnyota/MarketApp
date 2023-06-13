<?php
include('include/init.php');
//Future Front Page of Website:


if (getUserFromEmail('jaS22on')) {
    echo 'exists';
} else {
    echo 'nope!';
}