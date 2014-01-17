
<?php
session_start();

mysql_connect('localhost','root','');
$DataBase=mysql_select_db('webstreet') or die('Connection not working properly');

if($_REQUEST['buyer']>=0)
{	
$f=$_REQUEST['buyer'];
$b=$_REQUEST['blogs'];
$much=0; //count he gets all cards of same color
$goserv=-1; //pass var to build a server

if($f==1)  
$fpd= $_SESSION['pd1'];

if($f==2)    
$fpd= $_SESSION['pd2'];


$q22="select * from blogs where bid=$b";
$res22= mysql_query($q22);
$var22= mysql_fetch_array($res22);
//money transaction chek thers enough money!!
$val=$var22['bprice'];


if($_REQUEST['spac']!=-2)
$val=$_REQUEST['spac'];


$query1 = "UPDATE groups SET space=space-$val WHERE pid =$fpd and gid='{$_SESSION['grp']}' ";
mysql_query($query1);
$query2 = "UPDATE groups SET space=space+$val WHERE pid =0 and gid='{$_SESSION['grp']}' ";
mysql_query($query2);

//blog changes
$colr=$var22['color'];

$query3 = "select * from groups WHERE pid=0 and gid='{$_SESSION['grp']}' ";
$res3= mysql_query($query3);
$var3= mysql_fetch_array($res3);


$query2 = "select * from groups WHERE pid=$fpd and gid='{$_SESSION['grp']}' ";
$res2= mysql_query($query2);
$var2= mysql_fetch_array($res2);


if($colr==0)
{
$w=$var3['own_0'];	
$w_arr=explode(",",$w);
$pos=array_search($b,$w_arr);

if($pos!=NULL)
$w_arr[$pos]='-1';

$w=implode(",",$w_arr);
$qu=mysql_query("UPDATE groups set own_0='$w' where pid=0 and gid='{$_SESSION['grp']}'");

$p_mn=$var2['own_0'];
$arr=explode(",",$p_mn);

$arr[]=$b;
$p_mn=implode(",",$arr);

$qw2="UPDATE groups set own_0='$p_mn'  where pid=$fpd and gid='{$_SESSION['grp']}'";
mysql_query($qw2);


}

if($colr==1)
{
$w=$var3['own_1'];	
$w_arr=explode(",",$w);
$pos=array_search($b,$w_arr);

if($pos!=NULL)
$w_arr[$pos]='-1';

$w=implode(",",$w_arr);
$qu=mysql_query("UPDATE groups set own_1='$w' where pid=0 and gid='{$_SESSION['grp']}'");


$p_mn=$var2['own_1'];
$arr=explode(",",$p_mn);

for($i=0;$i<count($arr);$i++)
{ if($arr[$i]>0) $much++; }

if($much==1) $goserv=1;

$arr[]=$b;
$p_mn=implode(",",$arr);

$qw2="UPDATE groups set own_1='$p_mn'  where pid=$fpd and gid='{$_SESSION['grp']}'";
mysql_query($qw2);
}


if($colr==2)
{
$w=$var3['own_2'];	
$w_arr=explode(",",$w);
$pos=array_search($b,$w_arr);

if($pos!=NULL)
$w_arr[$pos]='-1';

$w=implode(",",$w_arr);
$qu=mysql_query("UPDATE groups set own_2='$w' where pid=0 and gid='{$_SESSION['grp']}'");


$p_mn=$var2['own_2'];
$arr=explode(",",$p_mn);

for($i=0;$i<count($arr);$i++)
{ if($arr[$i]>0) $much++; }

if($much==2) $goserv=2;


$arr[]=$b;
$p_mn=implode(",",$arr);

$qw2="UPDATE groups set own_2='$p_mn'  where pid=$fpd and gid='{$_SESSION['grp']}'";
mysql_query($qw2);
}


if($colr==3)
{
$w=$var3['own_3'];	
$w_arr=explode(",",$w);
$pos=array_search($b,$w_arr);

if($pos!=NULL)
$w_arr[$pos]='-1';

$w=implode(",",$w_arr);
$qu=mysql_query("UPDATE groups set own_3='$w' where pid=0 and gid='{$_SESSION['grp']}'");


$p_mn=$var2['own_3'];
$arr=explode(",",$p_mn);

for($i=0;$i<count($arr);$i++)
{ if($arr[$i]>0) $much++; }

if($much==2) $goserv=3;

$arr[]=$b;
$p_mn=implode(",",$arr);

$qw2="UPDATE groups set own_3='$p_mn'  where pid=$fpd and gid='{$_SESSION['grp']}'";
mysql_query($qw2);
}


if($colr==4)
{
$w=$var3['own_4'];	
$w_arr=explode(",",$w);
$pos=array_search($b,$w_arr);

if($pos!=NULL)
$w_arr[$pos]='-1';

$w=implode(",",$w_arr);
$qu=mysql_query("UPDATE groups set own_4='$w' where pid=0 and gid='{$_SESSION['grp']}'");

$p_mn=$var2['own_4'];
$arr=explode(",",$p_mn);

for($i=0;$i<count($arr);$i++)
{ if($arr[$i]>0) $much++; }

if($much==2) $goserv=4;

$arr[]=$b;
$p_mn=implode(",",$arr);

$qw2="UPDATE groups set own_4='$p_mn'  where pid=$fpd and gid='{$_SESSION['grp']}'";
mysql_query($qw2);
}



if($colr==5)
{
$w=$var3['own_5'];	
$w_arr=explode(",",$w);
$pos=array_search($b,$w_arr);

if($pos!=NULL)
$w_arr[$pos]='-1';

$w=implode(",",$w_arr);
$qu=mysql_query("UPDATE groups set own_5='$w' where pid=0 and gid='{$_SESSION['grp']}'");


$p_mn=$var2['own_5'];
$arr=explode(",",$p_mn);

for($i=0;$i<count($arr);$i++)
{ if($arr[$i]>0) $much++; }

if($much==2) $goserv=5;

$arr[]=$b;
$p_mn=implode(",",$arr);

$qw2="UPDATE groups set own_5='$p_mn'  where pid=$fpd and gid='{$_SESSION['grp']}'";
mysql_query($qw2);
}


if($colr==6)
{
$w=$var3['own_6'];	
$w_arr=explode(",",$w);
$pos=array_search($b,$w_arr);

if($pos!=NULL)
$w_arr[$pos]='-1';

$w=implode(",",$w_arr);
$qu=mysql_query("UPDATE groups set own_6='$w' where pid=0 and gid='{$_SESSION['grp']}'");

$p_mn=$var2['own_6'];
$arr=explode(",",$p_mn);

for($i=0;$i<count($arr);$i++)
{ if($arr[$i]>0) $much++; }

if($much==2) $goserv=6;

$arr[]=$b;
$p_mn=implode(",",$arr);

$qw2="UPDATE groups set own_6='$p_mn'  where pid=$fpd and gid='{$_SESSION['grp']}'";
mysql_query($qw2);
}


if($colr==7)
{
$w=$var3['own_7'];	
$w_arr=explode(",",$w);
$pos=array_search($b,$w_arr);

if($pos!=NULL)
$w_arr[$pos]='-1';

$w=implode(",",$w_arr);
$qu=mysql_query("UPDATE groups set own_7='$w' where pid=0 and gid='{$_SESSION['grp']}'");

$p_mn=$var2['own_7'];
$arr=explode(",",$p_mn);

for($i=0;$i<count($arr);$i++)
{ if($arr[$i]>0) $much++; }

if($much==2) $goserv=7;

$arr[]=$b;
$p_mn=implode(",",$arr);

$qw2="UPDATE groups set own_7='$p_mn'  where pid=$fpd and gid='{$_SESSION['grp']}'";
mysql_query($qw2);
}


if($colr==8)
{
$w=$var3['own_8'];	
$w_arr=explode(",",$w);
$pos=array_search($b,$w_arr);

if($pos!=NULL)
$w_arr[$pos]='-1';

$w=implode(",",$w_arr);
$qu=mysql_query("UPDATE groups set own_8='$w' where pid=0 and gid='{$_SESSION['grp']}'");

$p_mn=$var2['own_8'];
$arr=explode(",",$p_mn);

for($i=0;$i<count($arr);$i++)
{ if($arr[$i]>0) $much++; }

if($much==1) $goserv=8;

$arr[]=$b;
$p_mn=implode(",",$arr);

$qw2="UPDATE groups set own_8='$p_mn'  where pid=$fpd and gid='{$_SESSION['grp']}'";
mysql_query($qw2);
}

//set a cookie to store the server build permitted or not
setcookie('serv',$goserv);
}


else
{
$wh=$_REQUEST['auction'];	
$qi="select * from blogs where bid=$wh";
$resi= mysql_query($qi);
$vari= mysql_fetch_array($resi);

setcookie('aprice',$vari['bprice']);	
}

	

?>