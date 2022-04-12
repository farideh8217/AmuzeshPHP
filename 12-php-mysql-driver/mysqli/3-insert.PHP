<?php
include_once "1-connection.php";
$userdata=array(
    'fullname'=>"loghman avand",
    'age'=>31,
    'sex'=>'m',
    'issingle'=>0
);
//unsafe query
// $sql="insert into people (fullname,age,sex,issingle)
// values('{$userdata['fullname']}',{$userdata['age']},'{$userdata['sex']}',{$userdata['issingle']})";
// if($mysqli->query($sql)){
//     echo "user added successfully";
// }else{
//     echo "can not add user";
// }



//safe query
$sql="insert into people (fullname,age,sex,issingle) values(?,?,?,?)";
$stmt=$mysqli->prepare($sql);
$stmt->bind_param('siib',$userdata['fullname'],$userdata['age'],$userdata['sex'],$userdata['issingle']);
$stmt->execute();
$stmt->close();