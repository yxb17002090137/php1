<?php
header("Access-Control-Allow-Origin: http://10.30.29.85:63341");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Headers: Content-type");
header("Content-type:text/json");
$data=file_get_contents("php://input");
$data=json_decode($data);
$message=array('message'=>'success');
if($data->userName==123&&$data->passWord==123){
    session_start();
    $_SESSION['name']=$data->userName;
    echo json_encode($message);
}else{
    $message['message']='error';
    echo json_encode($message);
}
?>