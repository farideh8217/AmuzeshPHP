<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<?php
///////////////////////////////////////connection db
$database = [
    'host' => 'localhost',
    'dbname' => 'news',
    'user' => 'root',
    'pass' => ''
    ];
try {
    $db = new PDO("mysql:host={$database['host']};dbname={$database['dbname']}", $database['user'], $database['pass']);
    } catch (PDOException $e) {
    die("An error happend, Error: " . $e->getMessage());
}

if(isset($_POST["newsTitle"]) && isset($_POST["newstext"])) {
    $sql = "INSERT INTO news (newsname, newstext) VALUES(?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([
        $_POST["newsTitle"],
        $_POST["newstext"]
    ]);
    // header("Location: index.php");
}



////////////////////// namayesh etelat db /////////
function getAllUsers(){
    global $db;
    $sql = "SELECT * FROM news";
    $stmt = $db->prepare($sql);
    $stmt->execute([

    ]);
    return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
$users = getAllUsers();



?>


<body>
    <div class="container">
        <form method="POST" action="">
            <label class="title"> News Title:</label><input type="text" name="newsTitle"><br><br>
            <label class="text">News Text:</label><input class="input" style="height: 100px;" type="text" name="newstext">
           <button name="submit">submit</button>
        </form> 
        <table class="tt"  border="1" width="500" align="center">
            <tr>
                <th>id</th>
                <th>newsname</th>
                <th>newstext</th>
                <th>عملیات</th>
            </tr>
            <?php foreach ($users as $user) : ?>
                <tr>
                        <td><?= $user->id ?></td>
                        <td><?= $user->newsname ?></td>
                        <td><?= $user->newstext ?></td>
                        <td>
                            <a href="edit.php?id=<?= $user->id ?>">EDIT</a>
                            -
                            <a href="delete.php?id=<?= $user->id ?>">DELETE</a>
                        </td>
                </tr> 
        
            <?php endforeach; ?> 
            </table>  

           
    </div>   
</body>
</html>