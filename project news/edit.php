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

////////////////////// namayesh etelat db /////////
if(!isset($_GET["id"])) {
    exit("error, ID needed");
}
$id = $_GET["id"];
$sql = "SELECT * FROM news WHERE id = ?";
$stmt = $db->prepare($sql);
$stmt->execute([
    $id
]);
$user = $stmt->fetch(PDO::FETCH_OBJ);
if($user == null) {
    exit("we not have");    
}

if(isset($_POST["newsTitle"]) && isset($_POST["newstext"])) {
    $sql = "UPDATE news SET newsname = ?, newstext = ? where id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([
        $_POST["newsTitle"],
        $_POST["newstext"],
        $id
    ]);
    header("Location: index.php");
}
?>

<body>
    <div class="container">
        <form method="POST" action="">
            <label class="title"> News Title:</label>
            <br>
            <input type="text" name="newsTitle" value="<?= $user->newsname ?>">
            <br><br>

            <label class="text">News Text:</label>
            <br>
            <textarea class="input" style="height: 100px;" name="newstext">
                <?= $user->newstext ?>
            </textarea>

            <button name="submit">submit</button>
        </form> 
       
           
    </div>   
</body>
</html>