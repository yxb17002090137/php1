<?php
header("Access-Control-Allow-Origin: http://10.30.29.85:63341");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Headers: Content-type");
header("Content-type:text/json");
session_start();
$_SESSION['name']=null;
$message=array('message'=>'success');
echo json_encode($message);
session_destroy();
?>