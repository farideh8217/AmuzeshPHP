<?php
function getCurreentUserId(){
    return 1;
}

function isLoggedIn(){
    return false;
}
function login($user,$password){
    return 1;
}
function register($userData){
    global $pdo;

    $sql = "INSERT INTO `users` (`name`,`email`,`password`) VALUES (:name,:email,:pass);";
    $stmt = $pdo->prepare($sql);
    $values = [
        ':name' => $folder_name,
        ':email' => $current_user_id,
        ':pass' => $folder_name
    ];
    $stmt->execute($values);
    return $stmt->rowCount();
    return 1;
}