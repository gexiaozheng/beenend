<?php
    header("Content-type:application/json;charset=utf-8;");
//   id, bookmark,spendMore,spendHours,activity,publishTime
    @$bookmark=$_REQUEST['bookmark'] or die('{"responseInfo":"bookmark required."}');
    @$spendMore=$_REQUEST['spendMore'] or die('{"responseInfo":"spendMore required."}');
    @$spendHours=$_REQUEST['spendHours'] or die('{"responseInfo":"spendHours required."}');
    @$activity=$_REQUEST['activity'] or die('{"responseInfo":"activity required."}');
    $publishTime=time()*1000;
    require('connect.php');

    $sql="INSERT INTO record1 VALUES(NULL,$bookmark,$spendMore,$spendHours,'$activity',$publishTime)";
    $res=mysqli_query($conn,$sql);
    if($res===false){
       //测试插入失败返回什么
        $data['status']="0";
        $data['statusText']="error";
        $data['responseInfo']=$sql;
    }else{
         $data['status']="1";
         $data['statusText']="ok";
        $data['responseInfo']="这是第".mysqli_insert_id($conn)."条记录";
    }
    echo json_encode($data);

//bookmark=1&spendMore=1&spendHours=2&activity=5