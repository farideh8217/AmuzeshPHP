<?php
date_default_timezone_set('Asia/Tehran');//ساعت و همه چی را طبق قاره ی آسیا و شهر ایران نشان میدهد
echo date('d-m-Y').'<hr>';//سال وماه وروز را نشان می دهد
echo date('l').'<hr>';//روزی که الان هست را نشان می دهد
echo date('h:i:sa').'<hr>';//ساعت ودقیقه وثانیه
echo date('d-m-Y h:i:sa').'<hr>';
echo $time = time();
echo '<hr>';
echo date('d-m-Y h:i:sa',$time);
echo '<hr>';


