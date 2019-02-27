<?php
include "config.php";
for($i=11136;$i<14063;$i++)
{
	echo insert_db($conn,$i);
	echo $i;
	echo ".";
}

///////////
function insert_db($conn,$id)
{

	
	$query="INSERT INTO `darukade`
		(`id`)
			VALUES
		('$id')";
	$ok=mysqli_query($conn,$query);

	return $ok;
}
?>