<?php
function getCurreentUserId(){
    return 1;
}

function isLoggedIn(){
    return isset($_SESSION['login']) ? true : false;
}

function getLoggedInUser(){
    return $_SESSION['login'] ?? null ;
}

function getUSerByEmail($email){
    global $pdo;
    $sql = "SELECT * FROM `users` WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':email' => $email]);
    $records = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $records[0] ?? null;
}   

function login($email,$pass){
    $user = getUSerByEmail($email);
    if(is_null($user)){
        return false;
    }
    #check the password
    if(password_verify($pass,$user->password)){
        #login is successfuly
        $_SESSION['login'] = $user;
        return true; 
    }
    return false;
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