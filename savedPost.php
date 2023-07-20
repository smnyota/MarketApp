<?php
 include('include/init.php');
 if (verifyUser()) {
if($_REQUEST['action']== 0) {
    insertSavedPost($_REQUEST['userId'], $_REQUEST['productId']);
} else if ($_REQUEST['action']== 1) {
    deleteSavedPost($_REQUEST['userId'], $_REQUEST['productId']);
    
}

 } 