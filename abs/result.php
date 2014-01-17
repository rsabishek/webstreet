<?php
//include 'cnct.php';	

mysql_connect('localhost','root','');
$DataBase=mysql_select_db('webstreet') or die('Connection not working properly');


$name=$_REQUEST['name'];	
//$srent=$_REQUEST['srent'];	

$q1="select * from blogs where bid=$name";
$res=mysql_query($q1);
$var = mysql_fetch_array($res);	

if($_REQUEST['name'])
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


//echo $var['bname'];

}


/*if($_REQUEST['time'])
{
}*/

/*if($_REQUEST['srent'])
{echo " monsterr!"; 
}*/


/*if($_REQUEST['rent'])
{echo "hello".$var['brent'];  }*/

?>