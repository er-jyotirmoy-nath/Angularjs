<?php 
$json = file_get_contents('php://input');
$data = json_decode($json,true);
print_r($data);
include('bdd.php');
echo "Working.....";
//$name = 
$prodname = (isset($data["prodname"]))?$data["prodname"]:"no value";
$proddesc = (isset($data["proddesc"]))?$data["proddesc"]:"no value";
$prodstock = (isset($data["prodstock"]))?$data["prodstock"]:"no value";
$prodprice = (isset($data["prodprice"]))?$data["prodprice"]:"no value";
$prodcolor = (isset($data["prodcolor"]))?$data["prodcolor"]:"no value";
$prodcat = (isset($data["prodcat"]))?$data["prodcat"]:"no value";
$prodinstock = (isset($data["prodinstock"]))?$data["prodinstock"]:"no value";

/*echo "Product Name:".$prodname;
echo "Product Description:".$proddesc;
echo "Product Stock:".$prodstock;
echo "Product Price:".$prodprice;
echo "Product Color:".$prodcolor;*/
try{
$sql = "insert into PRODUCTS(ID,NAME,DESCRIPTION,STOCK,PRICE,PRODCOLOR,CATEGORY,IN_STOCK) VALUES (
'prod_id.NEXTVAL',:NAME,:DESCRIPTION,:STOCK,:PRICE,:PRODCOLOR,:CATEGORY,:IN_STOCK) ";
$query = $bdd->prepare($sql);
$query->bindParam(":NAME",$prodname);
$query->bindParam(":DESCRIPTION",$proddesc);
$query->bindParam(":STOCK",$prodstock);
$query->bindParam(":PRICE",$prodprice);
$query->bindParam(":PRODCOLOR",$prodcolor);
$query->bindParam(":CATEGORY",$prodcat);
$query->bindParam(":IN_STOCK",$prodinstock);
$query->execute();
if($query->rowCount()){
echo 'Set';
}
else{
	echo "Error Occured";
}
}
catch(Exception $e){
	echo $e->getMessage();
}
?>