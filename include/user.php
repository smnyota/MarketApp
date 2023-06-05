<?php
//should be userId but ima use password
function getUser($password) {
    $user = dbQuery ( "
        SELECT * 
        FROM `user` 
        WHERE `password` = '$password'
    ")->fetch();  // individual array (1d Array)
    return $user;
}


function user($userId) {
    $user = dbQuery ( "
        SELECT * 
        FROM `user` 
        WHERE `id` = '$userId'
    ")->fetch();  // individual array (1d Array)
    return $user;
}



function insertUser($firstName, $lastName, $email, $username, $password){
	dbQuery("
		INSERT INTO user(firstName, lastName, email, username, password)
		VALUES(:firstName, :lastName, :email, :username, :password)
	", [
		'firstName' => $firstName,
		'lastName' => $lastName,
        'email' => $email,
		'username' => $username,
		'password' => $password
	]);
	
}


function logout() {
	$_SESSION = [];
}