<?php 
header('Content-Type:application/json;charset=utf-8');
require('connect.php');

$sql="select * from question order by rand() limit 1";
$res=mysqli_query($conn,$sql);
if($res){
	$data=array();
	// $data=mysqli_fetch_all($res,1);
	while ($row = $res->fetch_assoc()) {
		// var_dump( $row);
		array_push($data,$row);
    }
    // var_dump( $data);
	if($data){
		$req["msg"]="ok";
		$req["data"]=$data;
		echo json_encode($req);
	}else{
		$req["msg"]="error";
		$req["data"]=$res;
		echo json_encode($req);
	}
}
	// $data=array("id"=>0,"title"=>"最能代表堃堃的歌曲:","options"=>"医生/南方姑娘/新贵妃醉酒/天仙配");
	// echo json_encode($data);
	