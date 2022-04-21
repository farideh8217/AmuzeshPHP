<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="project-pdo.css">
    <title>Document</title>
</head>



<?php
// connection to database
list($host,$database,$user,$pass)=["localhost","student","root",""];
try {
    $db=new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4",$user,$pass); 
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e) {
    echo "PDO error:failed to connect".$e->getMessage();
    exit(); 
}

//insert to db
if (isset($_POST["submit"])){
    if (!empty($_POST['firstname']) && !empty($_POST['lastname'])){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $sql="insert into people (firstname,lastname) value (?,?)";
        if ($stmt =$db->prepare($sql)){
            echo "اطلاعات شما با موفقیت ثبت شد";
        }else{
            echo " خطا در ورود اطلاعات";
        }
    }else{
        echo "فیلد نام ونام خانوادگی را تکمیل کنید";
    }
};

//select etelat
$sql="SELECT firstname,lastname FROM people";
$stmt=$db->prepare($sql);
$stmt->execute();

?>




<body>
<form method="POST" action="">
 <div class="box">
    <div class="box1"><label class="label">name:<input class="input"  type="text" name="firstname"></label></div> <br>
    <div class="box1"><label class="label">family:<input class="input"  type="text" name="lastname"></label></div>
    <input id="submit" type="submit" name="submit" value="send">
</div>
</form>
<table border="1" width="500" align="center" ="20px">
        <tr>
            <td>NAME</td>
            <td>FAMILY</td>
        </tr>

    <?php
        while ($row=$stmt->fetch(PDO::FETCH_OBJ)){
            echo "<tr>
            <td> $row[firstname]</td>
            <td> $row[lastname]</td>
            </tr>";
        }
        
    ?>
</table>
</body>
</html>