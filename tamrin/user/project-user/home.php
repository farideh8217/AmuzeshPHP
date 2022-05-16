<?php
include_once "config.php";
function getAllUsers(){
    global $db;
    $sql = "SELECT * FROM users";
    $stmt = $db->prepare($sql);
    $stmt->execute([

    ]);
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}
$users = getAllUsers();
/////////////////////////////////////////////
$count = $db->query("SELECT count(*) FROM users")->fetchColumn();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table  border="1" width="500" align="center">
            <tr>
                <th>id</th>
                <th>namee</th>
                <th>username</th>
                <th>password</th>
                <th>عملیات</th>
            </tr>
            <?php foreach ($users as $user) : ?>
                <tr>
                        <td><?= $user->id ?></td>
                        <td><?= $user->name ?></td>
                        <td><?= $user->username ?></td>
                        <td><?= $user->password ?></td>
                        <td>
                            <a href="insert.php">INSERT</a><br>
                            <a href="update.php">EDIT</a><br>
                            <a href="delete.php">DELETE</a><br>
                        </td>
                </tr>
            <?php endforeach; ?> 
            rows count---><label><?= $count?></label>
</body>
</html>