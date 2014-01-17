






<?php
function test1($who,$where)
{
mysql_connect('localhost','root','');
$DataBase=mysql_select_db('webstreet') or die('Connection not working properly');

$val=0;$val1=0;$val2=0;

if($who==1)
$comer=$_SESSION['pd1'];
else
$comer=$_SESSION['pd2'];

$q1="select * from blogs where bid=$where";
$res=mysql_query($q1);
$var = mysql_fetch_array($res);

$st="update blogs set color=$who where bid=1";mysql_query($st);
$st2="update blogs set color=$where where bid=2";mysql_query($st2);


$bright=$var['color'];

if($bright>=9)
{ $val=-1; 
}

else
{
$val=check($_SESSION['grp'],0,$bright,$where);

if($val== -1)
$val2=check($_SESSION['grp'],$_SESSION['pd1'],$bright,$where);

if($val2== -1)
check($_SESSION['grp'],$_SESSION['pd2'],$bright,$where);
}


if($val!=-1)
{
if($val==0) 	  //bank owns
$stat=1;   

else if($val==$comer)  //self own already
$stat=2; 

else  //other player owns
$stat=3; 
}

else
$stat=0;   //unbuy card

setcookie("monsterr",12);
}



function check($g,$p,$c,$w)
{
$q20="select * from groups where gid=$g and pid=$p";
$res20=mysql_query($q20);
$var20 = mysql_fetch_array($res20);	

if($c==0)	
$arr=explode(",",$var20['own_0']);
if($c==1)	
$arr=explode(",",$var20['own_1']);
if($c==2)	
$arr=explode(",",$var20['own_2']);
if($c==3)	
$arr=explode(",",$var20['own_3']);
if($c==4)	
$arr=explode(",",$var20['own_4']);
if($c==5)	
$arr=explode(",",$var20['own_5']);
if($c==6)	
$arr=explode(",",$var20['own_6']);
if($c==7)	
$arr=explode(",",$var20['own_7']);
if($c==8)	
$arr=explode(",",$var20['own_8']);

if(in_array($w,$arr))
{ return $p;
}

else
{ return -1; }
}


?>