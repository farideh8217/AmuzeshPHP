<?php
include_once "config.php";
if(!isset($_GET["id"])) {
    exit("error, ID needed");
}
$id = $_GET["id"];
$sql = "SELECT * FROM updateinformation WHERE id = ?";
$stmt = $db->prepare($sql);
$stmt->execute([
    $id
]);
$user = $stmt->fetch(PDO::FETCH_OBJ);
if($user == null) {
    exit("we not have");    
}

if(isset($_POST["firstname"]) && isset($_POST["lastname"]) && ($_POST["cityname"]) && ($_POST["email"])) {
    $sql = "UPDATE updateinformation SET firstname = ?,lastname = ? ,cityname = ? ,email = ?   where id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([
        $_POST["firstname"],
        $_POST["lastname"],
        $_POST["cityname"],
        $_POST["email"],
        $id
    ]);
    header("Location: select.php");
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
            First name:<br>
            <input name="firstname" type="text" value="<?=$user->firstname ?>">
            <br>
            Last anme:<br>
            <input name="lastname" type="text" value="<?=$user->lastname ?>">
            <br>
            City_name:<br>
            <input name="cityname" type="text" value="<?=$user->cityname?>">
            <br>
            Email id:<br>
            <input name="email" type="text" value="<?=$user->email ?>"><br>
            <input name="save" type="submit" value="submit">
        </form>
    </body>
</body>
</html>