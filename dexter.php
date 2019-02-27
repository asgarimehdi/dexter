<?php
//include "config.php";
include "fetch.php";
$num=1;
error_reporting(0);
//$url='http://127.0.0.1/dexter/1.html';



$row['id']=11405;
/**/	
$data=Fetch($row['id']);
print_r($data);

?>