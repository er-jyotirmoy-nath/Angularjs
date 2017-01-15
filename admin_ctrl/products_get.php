<?php
include("bdd.php");
$sql = "SELECT * FROM PRODUCTS";
$query = $bdd->prepare($sql);
$query->execute();	
$data = array();
while($row = $query->fetch(PDO::FETCH_ASSOC))
{
	$data[] = $row;
}
$data = array_change_key_case($data, CASE_LOWER);
print(json_encode($data));
/*header('Content-Type: application/json');
echo json_encode($data);*/



?>