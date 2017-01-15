<?php
/* try
{
	ini_set('display_errors','1');
	$bdd = new PDO('mysql:host=localhost;dbname=calendar;charset=utf8', 'root', '');
	

// connection to test database
	$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = dbserv13vm)(PORT = 1521)))(CONNECT_DATA=(SID=certtest)))" ;

	$bdd = new PDO('oci:dbname='.$db, 'agreen[wrcapp]', 'alex797', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
 }
*/
?>
<?php
$tns = "  
(DESCRIPTION =
    (ADDRESS_LIST =
      (ADDRESS = (PROTOCOL = TCP)(HOST = 127.0.0.1)(PORT = 1521))
    )
    (CONNECT_DATA =
      (SERVICE_NAME = XE)
    )
  )
       ";
$db_username = "sa";
$db_password = "sa";
try{
    $bdd = new PDO("oci:dbname=".$tns,$db_username,$db_password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   /*  $sql_seq = "CREATE SEQUENCE wrc.RIG_VAL_SEQ START WITH 1 INCREMENT BY 1 CACHE 100";
    $query_seq = $bdd->prepare($sql_seq);
    $query_seq->execute(); */
    
}catch(PDOException $e){
    echo ($e->getMessage());
   
}
?>