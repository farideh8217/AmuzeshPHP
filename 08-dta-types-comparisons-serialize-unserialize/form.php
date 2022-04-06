<?php
$msg = null;
$sucessMsg = false;
$errorMsg = false;
if(isset($_POST['submit'])){
    // echo 'form submmited!';
    if(empty($_POST['name']) && empty($_POST['email']) ){
        $errorMsg = true;
        $msg = 'input is empty!!!';
        
    }else{
        $sucessMsg =true;
        $msg = 'form submitted';
       
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>

    <form action="" method="POST">
        <input type="text" name='name' placeholder="name">
        <input type="text" name='email'placeholder="email">
        <input type="submit" name='submit'>
    </form>
    <?php
    if($sucessMsg){
        echo $msg; //درهرجایی که خواستیم میتونیم این پیغام هارا نشان دهیم
    }
     if($errorMsg){
        echo $msg;
    }
    ?>
</body>
</html>