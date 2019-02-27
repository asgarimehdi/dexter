<?php
include "config.php";
include "fetch.php";
$num=1;
error_reporting(0);
//$url='http://127.0.0.1/dexter/1.html';
//
$sql = "SELECT * FROM `darukade` WHERE `did` = 0 ORDER BY id desc limit $num";
$result=mysqli_query($conn,$sql);
	

while ($row = mysqli_fetch_array($result)) 
{


/*$row['id']=3105;
*/	

	$data=Fetch($row['id']);
    print_r($data);
	echo "</br>\n";
	$ok= insert_db($conn,$data);
	if ($ok) echo "ok"; else echo "no";
	echo "</hr>\n";

}
?>