<?php
function genrateRandomString($length) :string{
    $chars = "0123456789abcdefghiklmnopqrstuvwxyzABCDEFGHIKLMNOPQRSTUVWXYZ%$#@%!()";
    $charsLength = strlen($chars);
    $randomString = '';
    for($i = 0; $i < $length; $i++){
        $randomString .=$chars[rand(0,$charsLength -1)];//چون از صفر کاراکترها شروع می شود ممکن است از 68بیشتر شود منفی یک می گذاریم یعنی یکی کمتر از طول آن
    }
    return $randomString;
}
