


<?php
include('include/init.php');

var_dump(isset($_POST['login']));

//not checking if username or password is already being used---> defintely do that in final project lol
if(isset($_POST['login'])) {
    $_SESSION = [];
    session_unset();
    // session_start();
    echo 'Submit button pressed';
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    
   insertUser($firstName, $lastName, $email, $userName, $password);
    // session_destroy();
    // $_SESSION['loggedin'] = true;
    // echo "last id: ";
    echo"<br/>";
    $_SESSION['id'] = getUser($password)['id']; 
    var_dump($_SESSION);
    echo"<br/>";
    // echo "You have successfully signed up.";

    $login = "<a href='session_test2.php'>Log In</a>";
    echo $login;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel='stylesheet' href='style3.css' />

</head>
</html>




    <h2>Sign Up!</h2>
    <div>
        <form action="" method = 'post'>
            <input type="text" class = 'field' name = 'firstName' placeholder = 'First Name' required><br/>
            <input type="text" class = 'field' name = 'lastName' placeholder = 'Last Name' required> <br>
            <input type="text" class = 'field' name = 'userName' placeholder = 'Username' required><br/>
            <input type="password" class = 'field' name = 'password' placeholder = 'Password' required> <br>
            <input type="text" class = 'field' name = 'email' placeholder = 'Email' required> <br>
            <input type="submit" class = 'field' name = 'login' value = 'Login'>
        </form>
    </div>

<?php

    

