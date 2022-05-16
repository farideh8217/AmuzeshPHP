<?php
include_once "config.php";
if(!isset($_GET["id"])) {
    exit("error, ID needed");
}
$id = $_GET["id"];
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $db->prepare($sql);
$stmt->execute([
    $id
]);
$user = $stmt->fetch(PDO::FETCH_OBJ);
if($user == null) {
    exit("we not have");    
}


if(isset($_POST["name"]) && isset($_POST["username"]) && ($_POST["password"]) ) {
    $sql = "UPDATE users SET name = ?,username = ? ,password = ?  where id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([
        $_POST["name"],
        $_POST["username"],
        $_POST["password"],
        $id
    ]);
    header("Location: home.php");
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
<body>
        <form action="" method="POST">
            id:<br>
            <input name="id" type="text" value="<?=$user->id ?>">
            <br>
            name:<br>
            <input name="name" type="text" value="<?=$user->name ?>">
            <br>
            username:<br>
            <input name="username" type="text" value="<?=$user->username ?>">
            <br>
            password:<br>
            <input name="password" type="text" value="<?=$user->password?>">
            <br>
            <input name="save" type="submit" value="submit">
        </form>
    </body>
</body>
</html>