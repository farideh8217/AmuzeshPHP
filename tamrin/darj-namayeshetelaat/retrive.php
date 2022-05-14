<?php
include_once "config.php";
function getAllUsers(){
    global $db;
    $sql = "SELECT * FROM userinformation";
    $stmt = $db->prepare($sql);
    $stmt->execute([

    ]);
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}
$users = getAllUsers();
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
                <th>firstname</th>
                <th>lastname</th>
                <th>cityname</th>
                <th>email</th>
            </tr>
            <?php foreach ($users as $user) : ?>
                <tr>
                        <td><?= $user->firstname ?></td>
                        <td><?= $user->lastname ?></td>
                        <td><?= $user->cityname ?></td>
                        <td><?= $user->email ?></td>
                </tr> 
        
            <?php endforeach; ?> 
</body>
</html>