




<?php
function cnct()
{
$_SESSION['connection'] = mysql_connect("localhost","root","");
$_SESSION['db'] = mysql_select_db("webstreet",$_SESSION['connection']) ;//or die("Couldn't connect database");
}

function bn()
{
cnct();	
$pn1=""; $pn2="";

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$pn1 = $_POST['name1'];
$tn1 = $_POST['tokenn1'];
$pn2 = $_POST['name2'];

if(!isset($_POST['tokenn2'])) $tn2 =($tn1+1)%4;
else $tn2=$_POST['tokenn2'];

//$db = new PDO('mysql host:localhost;dbname='webstreet','root','null');
//$db->beginTransaction();


$q1 = "insert into player (pname,tid) values('$pn1','$tn1')";
mysql_query($q1);

$q2 = "insert into player (pname,tid) values('$pn2','$tn2')";
mysql_query($q2);

//call proc. group_create.


$_SESSION['cb1']=$pn1;   //cybernames
$_SESSION['cb2']=$pn2;
$_SESSION['to1']=$tn1;   //tokens
$_SESSION['to2']=$tn2;

/*$f1= "select chck from g_assign";$f11=mysql_query($f1);
$vf1 = mysql_fetch_array($f11);	


$q3= "insert into groups (gid,pid,space) values(".$vf1['chck'].",,15000)"; mysql_query($q3);
$q4= "insert into groups (gid,pid,space) values(".$vf1['chck'].",,15000)"; mysql_query($q4);
$q5= "insert into groups (gid,pid,space)  values(".$vf1['chck'].", 0,1000000)";  mysql_query($q5);

$u= "update g_assign set chck = ".$vf['chck']."+1"; mysql_query($u);*/

$_SESSION['sp1']=15000;  //money
$_SESSION['sp2']=15000;

$_SESSION['w1']='';      //owns
$_SESSION['w2']='';

$_SESSION['vr1']='';     //server
$_SESSION['vr2']='';

//include('game.php');
header('Location:game.php');
}

}
?>


