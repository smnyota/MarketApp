<?php

include('include/init.php');
// session_start();
if(isset($_POST['logout'])) {
   logout();
}

if(array_key_exists('id', $_SESSION)) {
    var_dump($_SESSION);
    $name = user($_SESSION['id'])['firstName'];
    echo "Hello ".$name;
} else {
    echo 'Not logged in!';
}

?>
<div>
<form action="" method = 'post'>
    <input type="submit" class = 'field' name = 'logout' value = 'Logout'>
</form>
</div>







