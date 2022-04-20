<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_POST["submit"])){
            if (!empty($_POST["name"]) && !empty($_POST["age"])){
                echo "welcome" . $_POST["name"];
                echo "your age" .$_POST["age"];
            }else{
                echo "وارد کنید";
            }
        }

    ?>

<form action="" method="POST">
   name: <input type="text" name="name">
   age : <input type="text" name="age">
   <input type="submit" name="submit" value="ارسال">
</form>


    
</body>
</html>