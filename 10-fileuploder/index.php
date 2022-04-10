<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
        if (isset($_SESSION['msg']) && $_SESSION['msg']==true):?><!--چون ممکن است مقدار خالی هم ست شود برای همین سشن را ترو میکنیم یعنی حتما باید ولیو داشته باشد
        -->
        <p class="msg"><?php echo $_SESSION['msg'] ?></p>
        <?php unset($_SESSION['msg'])?> <!--  مثلا اینپوت خالی باشد واپاود را بزنیم پیغام میدهد برای اینکه در هر بار رفرش این پیغام نشان داده نشود انست میکنیم  -->                                  
        <?php  endif ?>
        <form method="POST" action="upload.php" enctype="multipart/form-data">  <!--  انک تایپ برای اینکه فرم ما از نوع فایل است و حتما باید باشد -->
            <div class="uplode_wrapper">
                <span class="file-name">choose a file...</span>
                <label for="file-upload">Browse<input type="file" 
                id="file-upload" name="uploadedFile" ></label>
            </div>
            <input type="submit" name="uplodBtn" value="uplod">
        </form>
    </div>
</body>
</html>


