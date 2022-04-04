
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get method</title>
</head>
<body>
    <?php
    if (isset($_POST["submit"])){// اگر دکمه ی سابمیت زده شد وارد ایف شو
        if (!empty($_POST["firstname"]) && !empty($_POST["age"])){
            echo "welcome".$_POST["firstname"]."<br>";
            echo "you are ".$_POST["age"]."years old";  
        }else{
            echo "فیلدهای موردنظر را تکمیل کنید";
        }
    }
    ?> 
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="Post"><!-- اکشن مسیری است که دیتای ما به انجا ارسال می شود و پردازشی روی آن انجام میشود برای امنیت بیشتر از این دستور استفاده می  شود-->
    <label for="">نام    
    <input type="text" name="firstname">
    </label>
    <br>
    <label for="">سن شما
    <input type="text" name="age">
    </label>
    <input type="submit" name="submit" value="ارسال">
    </form>
</body>
</html>