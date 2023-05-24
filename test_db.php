<?php
include("include/connect.php"); 
$result = dbQuery("SHOW TABLES")->fetchAll();   #save tables variable as result
var_dump($result); #dump result variable onto page (as an array)

// phpinfo();





