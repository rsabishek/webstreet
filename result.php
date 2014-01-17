<?php

if($_REQUEST['name'])
{
include 'cnct.php';	
$q1 = "select * from blogs where bid=name";
$res=mysql_query($q1);

$var = mysql_fetch_array($res);	
$name=$_REQUEST['name'];	
echo "hello".$var['bname']; 



}



?>