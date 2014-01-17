<?php
include 'cnct.php';
session_start();

if($_REQUEST['title'])
{
$name=$_REQUEST['title'];	
$q2="select * from blogs where bid=$name";
$res2= mysql_query($q2);
$var2= mysql_fetch_array($res2);

if($name!=4 && $name!=5 && $name!=7 && $name!=10 && $name!=12 && $name!=15 && $name!=17 && $name!=20  && $name!=22 && $name!=25 && $name!=28 && $name!=30 && $name!=33 && $name!=35 && $name!=36 && $name!=38)	
{	echo $var2['bname'];	}
}

?>