





<?php
session_start();
$who=$_REQUEST['who'];
$where=$_REQUEST['where'];
$noc=1;

if($_REQUEST['who'])
{
mysql_connect('localhost','root','');
$DataBase=mysql_select_db('webstreet') or die('Connection not working properly');

$val=0;$val1=0;$val2=0;$val3=0;
$stat=0; //stat default zero!
$r=0; //lucky card number to be sent there!

if($who==1)
{$comer=$_SESSION['pd1'];$other=$_SESSION['pd2'];}

if($who==2)
{$comer=$_SESSION['pd2'];$other=$_SESSION['pd1'];}

$q1="select * from blogs where bid=$where";
$res=mysql_query($q1);
$var = mysql_fetch_array($res);

$bright=$var['color'];

if($bright>=9)
{ $noc=0; 
}

else
{	
$val=check($_SESSION['grp'],0,$bright);

if($val== -1)
$val2=check($_SESSION['grp'],$_SESSION['pd1'],$bright);

if($val2== -1)
$val3=check($_SESSION['grp'],$_SESSION['pd2'],$bright);
}


if($noc!=0)
{
if($val==0) 	  //bank owns
$stat=1;   

if($val2==$_SESSION['pd1'] && $val2==$comer)  //self own already
$stat=2; 

if($val2==$_SESSION['pd1'] && $val2==$other)  //oppo. owns
{$stat=3;tranc($where,$comer,$other,$_SESSION['grp']);}

if($val3==$_SESSION['pd2'] && $val3==$comer)  //self own already)
$stat=2; 

if($val3==$_SESSION['pd2'] && $val3==$other)  //oppo. owns
{$stat=3;
tranc($where,$comer,$other,$_SESSION['grp']);}
}

if($noc==0)
{

if($bright==10)	
{$stat=10;   //com card
$r=rand(1,6);
if($r==1)
{ exchange(500,$comer,0,$_SESSION['grp']);	}

if($r==4)
{ exchange(1000,$comer,0,$_SESSION['grp']);	}

if($r==5)
{ exchange(500,$comer,0,$_SESSION['grp']);	}

if($r==6)
{ exchange(1000,$other,$comer,$_SESSION['grp']); }
}


if($bright==11)	
{$stat=11;   //tb card

$r=rand(7,11);
if($r==7)
{exchange(1500,0,$comer,$_SESSION['grp']);}

if($r==8)
{exchange(1000,$other,$comer,$_SESSION['grp']);}

if($r==9)
{exchange(1000,$comer,0,$_SESSION['grp']);}

if($r==11)
{exchange(500,0,$comer,$_SESSION['grp']);}
}



if($bright==12)	
{$stat=12;   //online card
tranc($where,$comer,0,$_SESSION['grp']);
}

if($bright==13)	
{$stat=13;   //paypal card
tranc($where,$comer,0,$_SESSION['grp']);
}

if($bright==14)	
$stat=14;   //jail card

if($bright==15)	
$stat=15;   //hostng card

if($bright==16)	
$stat=16;   //spam card
}

$qa="select * from groups where pid =$comer and gid={$_SESSION['grp']}";
$ra=mysql_query($qa);
$va= mysql_fetch_array($ra);

$qa2="select * from groups where pid =$other and gid={$_SESSION['grp']}";
$ra2=mysql_query($qa2);
$va2= mysql_fetch_array($ra2);


setcookie("monsterr",$stat);
setcookie("luck",$r);
setcookie("sp1",$va['space']);
setcookie("sp2",$va2['space']);
}


function check($g,$p,$c)
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

if(in_array($_REQUEST['where'],$arr))
{ return $p;
}

else
{ return -1; }
}


function tranc($blog,$gvr,$getr,$grp)
{
$q22="select * from blogs where bid=$blog";
$res22= mysql_query($q22);
$var22= mysql_fetch_array($res22);

//money transaction
$val=$var22['brent']; //checkin servers tmrw..+ chck he has money to draw!
$query1 = "UPDATE groups SET space=space-$val WHERE pid =$gvr and gid=$grp ";
mysql_query($query1);
$query2 = "UPDATE groups SET space=space+$val WHERE pid =$getr and gid=$grp ";
mysql_query($query2);
}

function exchange($spac,$gvr,$getr,$grp)
{
$query1 = "UPDATE groups SET space=space-$spac WHERE pid =$gvr and gid=$grp ";
mysql_query($query1);
$query2 = "UPDATE groups SET space=space+$spac WHERE pid =$getr and gid=$grp ";
mysql_query($query2);
	
}

?>


<!--echo" <script> alert('bank'+$p); <!--</script>"; -->
