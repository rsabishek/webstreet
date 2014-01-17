<?php
echo "monster here!";
$query="insert into players values(null,'$_POST[name]','$_POST[tokn]',150000)";
mysql_query($query); 
?>	

