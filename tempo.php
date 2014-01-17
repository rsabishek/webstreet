






<?php
//include 'cnct.php';	
session_start();

mysql_connect('localhost','root','');
$DataBase=mysql_select_db('webstreet') or die('Connection not working properly');

$name=$_REQUEST['name'];	
$colr=-1;
$_REQUEST['name']=-1;




if($_REQUEST['name'])
{
$q1="select * from blogs where bid=$name";
$res=mysql_query($q1);
$var = mysql_fetch_array($res);	

if($name!=4 && $name!=5 && $name!=7 && $name!=10 && $name!=12 && $name!=15 && $name!=17 && $name!=20  && $name!=22 && $name!=25 && $name!=28 && $name!=30 && $name!=33 && $name!=35 && $name!=36 && $name!=38)	
{
echo "<table> ";	
echo "<tr><td>".$var['brent']."</td></tr>"; 
echo "<tr ><td style='padding-top:5px'>".$var['sr1']."</td></tr>"; 
echo "<tr><td>".$var['sr2']."</td></tr>"; 
echo "<tr><td>".$var['sr3']."</td></tr>";
echo "</table>";

echo "<table>";
echo "<tr ><td style='font-size:11px;padding-top:5px'>".$var['mortgage']."</td></tr>";
echo "<tr ><td style='font-size:11px;'>".$var['sprice']."</td></tr>";
echo "</table>";
}

add($_SESSION['grp'],0,$var['color']);

if($_SESSION['flagg']== -1)
add($_SESSION['grp'],$_SESSION['pd1'],$var['color']);

if($_SESSION['flagg']== -1)
add($_SESSION['grp'],$_SESSION['pd2'],$var['color']);

if($var['color']==9)
$_SESSION['flagg']=100;
}





?>


var just='<?php echo $_SESSION['flagg'];?>'; //current owner
var p1j='<?php echo $_SESSION['pd1'];?>';
var p2j='<?php echo $_SESSION['pd2'];?>';