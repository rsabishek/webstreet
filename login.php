<?php
session_start();
session_destroy();
$pn = "";
$tn = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
include 'cnct.php';
echo 'Connected to database';

$pn = $_POST['name'];

//include_once('cnct.php');
$SQL = "insert into players values('$pn',1,150000);

$result = mysql_query($SQL);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style>
body{
font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
font-size:12px;
}


p, h1,button{border:0; margin:0; padding:0;
font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
font-size:24px;
}


.myform{
position:absolute;
margin:0 auto;
background-image:url(bore.jpg);
width:250px;
height:250px;
padding:14px;
}

.myform2{
position:absolute;
display:none;
margin:0 auto;
background-image:url(bore.jpg);
width:250px;
height:250px;
padding:14px;
}



#p1,#p2{
border:solid 2px #b7ddf2;
}

#p1 h1,#p2 h1{
font-weight:bold;	
font-size:24px;
font-family:"Comic Sans MS", cursive;
color:#00F;
outline-style:none;
font-weight:bold;
margin-bottom:8px;
}

#p1 label,#p2 label{
display:block;
font-size:16px;
font-family:"Comic Sans MS", cursive;
color:#00F;
text-align:left;
width:100px;
float:left;
}


#p1 input,#p2 input{
float:none;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:120px;
margin:2px 0 20px 10px;
}

#p1 .onoffswitch{
    position: absolute; width: 119px;
	top:170px;
	left:110px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}

#p1 .onoffswitch-checkbox {
    display: none;
}

#p1 .onoffswitch-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 2px solid #121010; border-radius: 0px;
}
 
.onoffswitch-inner {
    width: 200%; margin-left: -100%;
    -moz-transition: margin 0.3s ease-in 0s; -webkit-transition: margin 0.3s ease-in 0s;
    -o-transition: margin 0.3s ease-in 0s; transition: margin 0.3s ease-in 0s;
}
.onoffswitch-inner:before, .onoffswitch-inner:after {
    float: left; width: 50%; height: 29px; padding: 0; line-height: 25px;
    font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
    border: 2px solid transparent;
    background-clip: padding-box;
}

.onoffswitch-inner:before {
    content: "human";
    padding-left: 10px;
    background-color: #383838; color: #FFFFFF;
}
.onoffswitch-inner:after {
    content: "browser";
    padding-right: 10px;
    background-color: #F2EAEA; color: #262525;
    text-align: right;
}
.onoffswitch-switch {
    width: 18px; margin: 0px;
    background:#2A5BB0;
    position: absolute; top: 0; bottom: 0; right: 101px;
    -moz-transition: all 0.3s ease-in 0s;
    -webkit-transition: all 0.3s ease-in 0s;
    -o-transition: all 0.3s ease-in 0s; 
	transition: all 0.3s ease-in 0s; 
}


.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
    margin-left: 0;
}

.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
    right: 0px; 
}

.button {
	position:absolute;
	top:250px;
	left:135px;
	
   border-top: 1px solid #ffffff;
   background: #000000;
   background: -webkit-gradient(linear, left top, left bottom, from(#030003), to(#000000));
   background: -webkit-linear-gradient(top, #030003, #000000);
   background: -moz-linear-gradient(top, #030003, #000000);
   background: -ms-linear-gradient(top, #030003, #000000);
   background: -o-linear-gradient(top, #030003, #000000);
   padding: 11.5px 23px;
   -webkit-border-radius: 8px;
   -moz-border-radius: 8px;
   border-radius: 8px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: #ffffff;
   font-size: 14px;
   font-family: 'Lucida Grande', Helvetica, Arial, Sans-Serif;
   text-decoration: none;
   vertical-align: middle;
   }
.button:hover {
   border-top-color: #ffffff;
   background: #ffffff;
   color: #0d0d0d;
   }
.button:active {
   border-top-color: #000000;
   background: #000000;
   }


</style>

<script>

var title,form2;
function save(frm)
{
var d;	
title=document.getElementById("button");	
tn1=document.getElementById("p1t").value;	
tn2=document.getElementById("p2t");	
form2=document.getElementById("p2");
form1=document.getElementById("p1");	


if(frm.onoffswitch.checked)	  //player2 selectd!
{
form1.style.display='none';	
form2.style.display='block';

if(tn1=="dog")	 d=0;
if(tn1=="car")	 d=2;
if(tn1=="hat")	 d=1; 
if(tn1=="plane") d=4;


else tn2.options[d].disabled=true;
}
	
else  //browser
{
	
}
}


function oppnt()
{
var bs=document.getElementsByTagName('input');	
var bfn;

if(bs[0].type=='checkbox' && bs[0].checked==true) //first input!
{
document.getElementById('bon').value='carry on';	
}

else document.getElementById('bon').value='run in web street!';	
}


</script>


</head>



<body background="runn!.jpg" bgcolor="#000000" width="1088" height="680" >

<div id="p1" class="myform">

<form id="form" name="form" method="post" action="login.php">
<h1>PLAYER 1</h1>


<div class="onoffswitch"> 
 <input type="checkbox" name="onoffswitch"  value="a" onclick="oppnt()" class="onoffswitch-checkbox"  id="myonoffswitch" checked>
 
 <label class="onoffswitch-label" for="myonoffswitch">
 <div class="onoffswitch-inner"></div>
 <div class="onoffswitch-switch"></div>
 </label> 
</div>

<label>_cyber Name</label>
<input type="text" name="name" id="name" value="player1"/>

<label>_lucky Token</label>
<select id="p1t">
 <option value="dog">dog</option>
 <option value="hat">hat</option>
 <option value="car">car</option>
 <option value="plane">plane</option>
</select>

<br><br><br><br>
<label>_opponent    </label>

<input type="button" id="bon" class="button" onclick="save(this.form)" value="player 2">

</form>
</div>


<div id="p2" class="myform2">

<form id="form2" name="form2" method="post" action="login.php">
<h1>PLAYER 2</h1>


<label>_cyber Name</label>
<input type="text" name="name" id="name" value="player2"/>

<label>_lucky Token</label>
<select id="p2t">
 <option value="dog">dog</option>
 <option value="hat">hat</option>
 <option value="car">car</option>
 <option value="plane">plane</option>
</select>


<input type="button"  class="button" onclick="" value="run in web street">

</form>
</div>



</body>
</html>



