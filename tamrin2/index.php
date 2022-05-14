<?php
$database = [
    'host'=>'localhost',
    'dbname'=>'tamrin2',
    'user'=>'root',
    'pass'=>''
];
try {
    $db = new PDO("mysql:host={$database['host']};dbname={$database['dbname']}", $database['user'], $database['pass']);
    } catch (PDOException $e) {
    die("An error happend, Error: " . $e->getMessage());
}

function getAllUsers(){
    global $db;
    $sql = "SELECT * FROM up";
    $stmt = $db->prepare($sql);
    $stmt->execute([

    ]);
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}
$users = getAllUsers();




//////////////////////////////

if(isset($_POST["fname"]) && isset($_POST["lname"]) ) {
    $sql = "UPDATE up SET fname = ?,lname = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([
        $_POST["fname"],
        $_POST["lname"],
    ]);
}

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
            </tr>
            <?php foreach ($users as $user) : ?>
                <tr>
                        <td><?= $user->fname ?></td>
                        <td><?= $user->lname ?></td>
                        <td>
                            <a href="">EDIT</a>
                        </td>
                </tr> 
            <?php endforeach; ?> 
<form action="" method="POST">
    firstname:<input name="fname" type="text" value="<?=$user->fname?>">
    lastname:<input name="lname" type="text" value="<?=$user->lname?>">
<button>sabt</button>
</form>            
</body>
</html>

