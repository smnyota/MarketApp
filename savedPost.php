<?php
 include('include/init.php');
 if (verifyUser()) {
 insertSavedPost($_REQUEST['userId'], $_REQUEST['productId']);
 } 