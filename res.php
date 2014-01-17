<?php
include 'cnct.php';	
//$srent=$_REQUEST['srent'];	

$q1="select bname from blogs where bid=$name";
$res=mysql_query($q1);
$var = mysql_fetch_array($res);	

if($_REQUEST['time'])
{
echo $var['bname'];
}

?>