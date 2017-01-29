<?php
$json = file_get_contents('php://input');
$data = json_decode($json,true);
//print_r($data);

include("bdd.php");
$sql = "SELECT * FROM PRODUCTS where id = :id";
$query = $bdd->prepare($sql);
$query->bindParam(":id",$data);
$query->execute();	
$data = array();
while($row = $query->fetch(PDO::FETCH_ASSOC))
{
	$data[] = $row;
}
$data = array_change_key_case($data, CASE_LOWER);
print(json_encode($data));
?>