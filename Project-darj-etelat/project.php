<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="project.css">
    <title>Document</title>
</head>



<?php
$mysqli = new mysqli("localhost","root","","student");
// connection to database
if ($mysqli->connect_error){
    echo "failed to connect to mysql .error".$mysqli->connect_error;
    exit;
}
$mysqli->set_charset('utf8');


//insert to db
if (isset($_POST["submit"])){
    if (!empty($_POST['firstname']) && !empty($_POST['lastname'])){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $sql="INSERT INTO people (firstname ,lastname) values ('$firstname','$lastname') ";

        if ($mysqli->query($sql)){
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
$result=$mysqli->query($sql);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);

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
        foreach($rows as $row){
            echo "<tr>
                <td> $row[firstname]</td>
                <td> $row[lastname]</td>
            </tr>";
        }
    ?>
</table>
</body>
</html>