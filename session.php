<?php
header("Access-Control-Allow-Origin: http://10.30.29.85:63341");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Headers: Content-type");
session_start();
$message=array('message'=>'success');
if(!isset($_SESSION['name']))
{
    $message['message']='errors';
    echo json_encode($message);
}else{
    echo json_encode($message);
}
?>