<?php
session_start();//تا وقتی یوزر کار میکند میتواند مقادیر را بین صفحات مختلف جابجا کند
$msg=null;
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if (isset($_POST['uplodBtn']) && $_POST['uplodBtn']=='uplod'){
        if(isset($_FILES['uploadedFile']) && !empty($_FILES['uploadedFile'])){
            $fileName=$_FILES['uploadedFile']['name'];
            $filesize=$_FILES['uploadedFile']['size'];
            $fileType=$_FILES['uploadedFile']['type'];
            $fileNameSeprate=explode('.',$fileName); //برای اینکه اگر دوتا نام فایلی یجور بود دومی روی اولی اوررایت نشود نام فایل وپسوند با دات توسط اکسپلود جدا می شود
            $fileExtention=strtolower(end($fileNameSeprate));//آخر فایل که پسوند است به حروف کوچک تبدیل میکند
            $newFileName =md5(time().$fileName).'.'.$fileExtention; //نام تصادفی ایجاد میکند
            $allowedFileExtentions=['jpg','jpeg','gif','doc','zip','rar'];
            if(in_array($fileExtention,$allowedFileExtentions)){ //آیا اولی در دومی هست 
                $alloedMaxFileSize=5*1024*1024;
                if($filesize<$alloedMaxFileSize){
                    $uploadfiledir='upload/';
                    $destpath=$uploadfiledir.$newFileName;
                    if(move_uploaded_file($_FILES['uploadedFile']['tmp_name'],$destpath)){
                            $msg="فایل شما با موفقیت آپلود گردید";
                    }else{
                            $msg="خطا در آپلود فایل";
                    }
                    
                }else{
                        $msg="حجم فایل شما بیش از حد مجاز می باشد";
                }
                
            }else{
                $msg="فایل مورد نظر شما برای آپلود مجاز نمی باشد";
            }   

        }else{
            echo $msg="لطفا فایل مورد نظر خود را انتخاب نمایید";
        }
    }
}
$_SESSION['msg']=$msg;
header("location:index.php"); 