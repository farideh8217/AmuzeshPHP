<?php
include_once "config.php";

if (isset($_POST["save"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql="INSERT INTO users(id,name,username,password) values (?,?,?,?) ";
    $stmt =$db->prepare($sql);
    $stmt->execute([
        $id,
        $name,
        $username,
        $password
    ]); 
   header("Location: home.php");
}
?>
<!DOCTYPE html>
<html>
    <body>
        <form action="" method="POST">
            id:<br>
            <input name="id" type="text">
            <br>
            nanme:<br>
            <input name="name" type="text">
            <br>
            username:<br>
            <input name="username" type="text">
            <br>
            password:<br>
            <input name="password" type="password"><br>
            <input name="save" type="submit" value="submit">
        </form>
    </body>
</html>