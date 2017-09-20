<?php 
header('Content-Type:application/json;charset=utf-8');
require('connect.php');
@$qid=$_REQUEST['qid'] or die('{"msg":"question-id is required"}');

$sql="select * from answer where qid='$qid'";
$res=mysqli_query($conn,$sql);
if($res){
	//$data=mysqli_fetch_all($res,1);
	$data=array();
    	while ($row = $res->fetch_assoc()) {
    		array_push($data,$row);
        }
	if($data){
		$req["code"]="1";
		$req["msg"]="ok";
		$req["data"]=$data;
		echo json_encode($req);
	}else{
		$req["code"]="0";
		$req["msg"]="error";
		$req["data"]=$res;
		echo json_encode($req);
	}
}
	