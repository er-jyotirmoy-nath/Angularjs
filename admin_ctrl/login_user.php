<?php
include("bdd.php");
$json = file_get_contents('php://input');
$data1 = json_decode($json,true);
$data = array();
if($data1["username"] == "root")
$star = sha1("1213424467565324523564fvbgy8#@#$");
else
$star = "false";
$data = array("token"=> $star);
print(json_encode($data));
/*header('Content-Type: application/json');
echo json_encode($data);*/



?>