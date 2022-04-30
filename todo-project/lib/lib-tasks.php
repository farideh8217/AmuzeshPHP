<?php
if (!defined('BASE_PATH')){
    echo "permision denied";
    die();
}

function deletefolder(int $folder_id) : int
{
    global $pdo;

    $sql = "delete from `folders` where `id` = $folder_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->rowCount();
}

function addFolders(string $folder_name) : int
{
    global $pdo;

    $current_user_id = getCurrentUserId();
    $sql = "INSERT INTO `folders` (`name`,`user_id`) VALUES (:folder_name,:user_id);";
    $stmt = $pdo->prepare($sql);
    $values = [
        ':folder_name' => $folder_name,
        ':user_id' => $current_user_id
    ];
    $stmt->execute($values);
    return $stmt->rowCount();
}

function getFolders()
{
    global $pdo;

    $current_user_id = getCurrentUserId();
    $sql = "select * from `folders` where `user_id` = $current_user_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $records;
}

function getTasks() 
{
    global $pdo;
    $folder = $_GET['folder_id'] ?? null;
    $foldercondition = '';
    if (isset($folder) and is_numeric($folder)){
        $foldercondition = 'and folder_id = $folder';
    }

    $current_user_id = getCurrentUserId();
    $sql = "select * from `tasks` where `user_id` = $current_user_id $foldercondition";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $records;
}

function deleteTask(int $task_id) : int
{
    global $pdo;

    $sql = "delete from `tasks` where `id` = $task_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->rowCount();
}