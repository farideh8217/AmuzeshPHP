<?php
function getCurreentUserId(){
    return 1;
}

function isLoggedIn(){
    return false;
}
function getUSerByEmail($email){
    
}
function login($email,$password){
    $user = getUSerByEmail($email);
    return 1;
}
function register($userData){
    global $pdo;
   
    $passHash = password_hash($userData["password"],PASSWORD_BCRYPT);
    $sql = "INSERT INTO `users` (`name`,`email`,`password`) VALUES (:name,:email,:pass);";
    $stmt = $pdo->prepare($sql);
    $values = [
        ':name' => $userData['name'],
        ':email' => $userData['email'],
        ':pass' => $passHash
    ];
    $stmt->execute($values);
    return $stmt->rowCount() ? true : false;
    return 1;
}