<?php
include('include/init.php');


//not checking if username or password is already being used--->
if(isset($_POST['login'])) {
    $_SESSION =[];
    var_dump($_POST);
    echo 'Submit button pressed';

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];

    
//    insertUser($firstName, $lastName, $email, $userName, $password);
    
    $_SESSION['id'] = getUser($email, $phoneNumber)['id']; 
   
    var_dump($_SESSION);
   

    // echo "You have successfully signed up.";
    
    // $login = "<a href='login.php'>Log In</a>";
    // echo $login;
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
            <input type="text" class = 'field' name = 'email' placeholder = 'Email' required><br/>
            <input type="text" class = 'field' name = 'phoneNumber' placeholder = 'Phone Number' required> <br>
            <input type="password" class = 'field' name = 'password' placeholder = 'Password' required> <br>
            <input type="submit" class = 'field' name = 'login' value = 'Login'>
        </form>
    </div>

<?php