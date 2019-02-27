<?php
$host="localhost"; /* host address */
$username="hidajiau_db";
$password="r&2AshSgtfkI";
$db_name="hidajiau_db";/* database name in mysql */
$conn = @mysqli_connect("$host", "$username", "$password")
      or die ("could not connect");
$selected = mysqli_select_db($conn,"$db_name" )
        or die ("Could not select database.");
mysqli_query($conn,"SET NAMES utf8");
mysqli_query($conn,"SET CHARACTER_SET utf8");
?>



