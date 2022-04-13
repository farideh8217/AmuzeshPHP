<?php
include_once "1-connection.php";
//اگر از سمت کاربر تغییراتی خواست صورت بگیرد برای مثال ایدی 6حذف شود با دستورات امن زیر این کار را انجام می دهیم
// $user_id=6;
// $sql="delete from people where id=?";
// $stmt=$mysqli->prepare($sql);
// $stmt->bind_param("i",$user_id);
// $stmt->execute();


//اگر تغییرات از سمت کاربر نبود مثلا خواستیم کل ایدی های زیر 7 حذف شوند از دستورات زیر استفاده می کنیم
$sql="delete from people where id < 7";
if ($mysqli->query($sql)){
    echo " record successfuly deleted".PHP_EOL;
}else{
    echo "failed to delete".PHP_EOL;
}
