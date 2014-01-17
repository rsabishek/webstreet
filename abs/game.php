<?php 
session_start();
$_SESSION['cb1']="monster";
$_SESSION['cb2']="symon";
$_SESSION['to1']="1";
$_SESSION['to2']="2";

//print_r($_SESSION);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>_score</title>
<style>
button{
position: absolute;
top: 100px;
left: 150px;}

#bx,#bx2
{
position:absolute;
top:140px;
left:105px;

width:400px;
height:250px;
padding:10px;
border:5px solid gray;
margin:0px;

border:double 7px #000000;
-moz-border-radius: 18px;
-webkit-border-radius: 18px;
border-radius: 18px;

-moz-box-shadow: 7px 10px 8px #1a151a;
-webkit-box-shadow: 7px 10px 8px #1a151a;
box-shadow: 7px 10px 8px #1a151a;

@font-face { font-family: 'BrushScriptStdMedium';
src: url('brushscriptstd.eot');
src: local('Brush Script Std'), local('BrushScriptStd'), url('brushscriptstd.woff') format('woff'), url('brushscriptstd.ttf') format('truetype');}

.classname{ font:24px normal normal BrushScriptStdMedium;}

background-color: rgba(75, 57, 48, 1);
background: rgba(75, 57, 48, 1);
color: rgba(75, 57, 48, 1);

background:-webkit-gradient(linear, 35% 100%, 0% 4%, from(#0D0B0F), to(#EBFFFF))
}

#c3,#c1
{
position:absolute;
top:450px;
left:680px;
width:500px;
height:150px;
padding:10px;
border:5px solid gray;
margin:0px;

border:double 7px #000000;
-moz-border-radius: 18px;
-webkit-border-radius: 18px;
border-radius: 18px;

-moz-box-shadow: 7px 10px 8px #1a151a;
-webkit-box-shadow: 7px 10px 8px #1a151a;
box-shadow: 7px 10px 8px #1a151a;

@font-face { font-family: 'BrushScriptStdMedium';
src: url('brushscriptstd.eot');
src: local('Brush Script Std'), local('BrushScriptStd'), url('brushscriptstd.woff') format('woff'), url('brushscriptstd.ttf') format('truetype');}

.classname{ font:24px normal normal BrushScriptStdMedium;}

background-color: rgba(75, 57, 48, 1);
background: rgba(75, 57, 48, 1);
color: rgba(75, 57, 48, 1);

background:-webkit-gradient(linear, 35% 100%, 0% 4%, from(#0D0B0F), to(#EBFFFF))
}

.t1,.t2,.t3,.t4,.t5,.t6,.t7,.t8,.t9
{
position:absolute;	
width:53px;height:76px;border:1 px #03C;
background-color:transparent;
}

.jail
{
position:absolute;	
width:80px;height:76px;border:1 px #03C;
background-color:transparent;
}

.demo
{
position:absolute;	
width:53px;height:76px;border:1 px #03C;
background-color:#3F3;	
}

.l1,.l2,.l3,.l4,.l5,.l6,.l7,.l8,.l9
{
position:absolute;	
width:77px;height:50px;border:1 px #03C;
background-color:transparent;	
}

park
{
position:absolute;	
width:77px;height:75px;border:1 px #03C;
background-color:transparent;	
}

.demo2
{
position:absolute;	
width:77px;height:50px;border:1 px #03C;
background-color:#3F3;	
}


.u1,.u2,.u3,.u4,.u5,.u6,.u7,.u8,.u9
{
position:absolute;	
width:53px;height:76px;border:1 px #03C;
background-color:transparent;	
}

.spam
{
position:absolute;	
width:77px;height:75px;border:1 px #03C;
background-color:transparent;	
}

.demo3
{
position:absolute;	
width:53px;height:76px;border:1 px #03C;
background-color:#3F3;		
}


.r1,.r2,.r3,.r4,.r5,.r6,.r7,.r8,.r9
{
position:absolute;	
width:77px;height:50px;border:1 px #03C;
background-color:transparent;
}

.demo4
{
position:absolute;	
width:77px;height:50px;border:1 px #03C;
background-color:#3F3;		
}
</style>
 
</head>
<script type="text/javascript" src="jquery/jquery-1.9.js"></script>
<!--<script type="text/javascript" language="javascript">
var i=0;

$(document).ready(function()
{
$("#showw").mouseover(function(event)
{			
});
});
</script>-->
<input type="button" id="bnn"  style="display:block"  value="start" onClick="p_roll()" >
<input type="button" id="bnq"  style="display:block ;top:6px;left:50px;position:absolute"  value="end" onClick="qt()">


<script>
var imgObj = null, imgObj2=null;
var sum_t1;
var to_move=0,to_mov2=0;
var set=0; //1-p1; 0-p2
var flag=0;//throw dice

var quit=0; var bg,roll_bn,blck,bsq;
var alln;
var turn=0;var robo=0;
var mr_pl;


<?php
function transit() //db transactn.
{
echo 'alert("hello")';	
}
?>

function assume()
{
bsq=document.getElementById("bx");		
bg=document.getElementById("bx2");//backgrn blac
roll_bn=document.getElementById("roll");//button roll
blck=document.getElementById("shww");//title disable
sp1=document.getElementById("pl1");//pl name
bu=document.getElementById("bu");//pl name
au=document.getElementById("au");//pl name
alln=document.getElementById("all");//all cards
}

function buyng()
{
assume();	
bu.style.display="none";//buy
au.style.display="none";//auction
//blck.style.display="block";
bg.style.display="none";
document.getElementById("bp").style.display="none";
//document.getElementById("mv").style.display="none";
bsq.style.display="none";
alln.style.display="none";
//alert('bought!');
p_roll();
}

function auctng()
{
<?php
transit();
?>
}

function market()
{	
//allot();
document.getElementById("bx").style.display="block";		
document.getElementById("bx2").style.display="block";//backgrn blac
document.getElementById("all").style.display="block";

if(set==0)	
{boxx(to_mov2); }

if(set==1)
{ boxx(to_move); }

var bu=document.getElementById("bu");//buy
var au=document.getElementById("au");//auction

bu.style.display="block";
au.style.display="block";
}

function rll6()
{
assume();	
sp1.style.display="none";	
bg.style.display="none";	
roll_bn.style.display="none";	
blck.style.display="none";
throwdice();//dog moves
market(); //buy or auction?
}

function p_roll()
{
set=(set+1)%2;	

assume();	
bg.style.display="block";	
roll_bn.style.display="block";	//roll button
blck.style.display="none";
sp1.style.display="block"; 
if(set==1)
sp1.innerHTML="player1";	
if(set==0)
sp1.innerHTML="player2";	
}



function qt()
{quit=1;}

</script>

<script>
function point_it(event){
    pos_x = event.offsetX?(event.offsetX):event.pageX-document.getElementById("pointer_div").offsetLeft;
    pos_y = event.offsetY?(event.offsetY):event.pageY-document.getElementById("pointer_div").offsetTop;
    document.getElementById("cross").style.left = (pos_x-1) ;
    document.getElementById("cross").style.top = (pos_y-15) ;
    document.getElementById("cross").style.visibility = "visible" ;
    document.pointform.form_x.value = pos_x;
    document.pointform.form_y.value = pos_y;
}

//preload the six images first
var face0=new Image()
face0.src="d1.gif";
var face1=new Image()
face1.src="d2.gif";
var face2=new Image()
face2.src="d3.gif";
var face3=new Image()
face3.src="d4.gif";
var face4=new Image()
face4.src="d5.gif";
var face5=new Image()
face5.src="d6.gif";

function allot()
{
document.getElementById("bp").style.display="none";			
//document.getElementById("mv").style.display="none";//title			
document.getElementById("bx").style.display="none";		
document.getElementById("w").style.display="none";	
document.getElementById("lb").style.display="none";	
document.getElementById("p").style.display="none";	
document.getElementById("o").style.display="none";	
document.getElementById("r").style.display="none";	
document.getElementById("y").style.display="none";	
document.getElementById("g").style.display="none";	
document.getElementById("b").style.display="none";	
}

function boxx(know)
{
var i=know;	
var bs=document.getElementById("bx");	
bs.style.display="block";
var mons=document.getElementById("bp");	
mons.style.display="none";


if(know==1 || know==3) 
{
allot();	
bs.style.display="block";
mons.style.display="block";
document.getElementById("w").style.display="block";	
}

else if(know==6 || know==8 || know==9) 
{allot();	

bs.style.display="block";
mons.style.display="block";
document.getElementById("lb").style.display="block";	
}

else if(know==11 || know==13 || know==14) 
{allot();	
bs.style.display="block";
mons.style.display="block";
document.getElementById("p").style.display="block";	
}

else if(know==16 || know==18 || know==19) 
{allot();	
document.getElementById("o").style.display="block";	
bs.style.display="block";
mons.style.display="block";
}

else if(know==21 || know==23 || know==24) 
{allot();	
document.getElementById("r").style.display="block";	
bs.style.display="block";
mons.style.display="block";
}

else if(know==26 || know==27 || know==29) 
{allot();	
document.getElementById("y").style.display="block";	
bs.style.display="block";
mons.style.display="block";
}

else if(know==31 || know==32 || know==34) 
{allot();	
document.getElementById("g").style.display="block";	
bs.style.display="block";
mons.style.display="block";
}

else if(know==37 || know==39) 
{allot();	
document.getElementById("b").style.display="block";	
bs.style.display="block";
mons.style.display="block";
}

else
{
allot();	
}

$.get(
"comb.php", 
{name:i},
function(data) {$("#bp").html(data);}
);

$.get(
"comb2.php", 
{title:i},
function(data) {$("#mv").html(data);}
);

$("#shww").mouseout(function(event)
{document.getElementById("bp").style.display="none";
document.getElementById("mv").style.display="none";
});
}


</script>
<img src="d1.gif" name="mydice1" style=" position:absolute;top:510px;left:150px;display:block">
<!--<img src="d3.gif" name="mydice1" style="display:block">
<img src="d4.gif" name="mydice1" style="display:block">
<img src="d5.gif" name="mydice1" style="display:block">
<img src="d6.gif" name="mydice1" style="display:block">-->
<img src="d1.gif" name="mydice2" style="top:510px;left:217px; position:absolute;display:block">
</div>
<script>
//var j=36;

function init()
{
imgObj = document.getElementById('tk1');
imgObj2 = document.getElementById('tk2');

imgObj.style.position= 'absolute'; 
imgObj.style.left = '560px'; 	
imgObj.style.top = '610px'; 	
imgObj2.style.position= 'absolute'; 
imgObj2.style.left = '560px'; 	
imgObj2.style.top = '610px'; 	
}

function throwdice()
{
var randomdice1 = Math.round(Math.random()*5);
var randomdice2 = Math.round(Math.random()*5);
sum_t1 =(randomdice1 + randomdice2 + 2);

document.images["mydice1"].src=eval("face"+randomdice1+".src");
document.images["mydice2"].src=eval("face"+randomdice2+".src");

if(set==1)
{to_move = to_move+sum_t1;
mov_p1();}

if(set==0)
{to_mov2 = to_mov2+sum_t1;
mov_p2();}
}

function  mov_p1()
{
if(to_move>40) 
{to_move=to_move-40; 
imgObj.style.top = '610px';imgObj.style.left = '560px';

if(to_move<=10) flag=-1;  
else flag=0;
}

if(to_move<=10)	
{
if(flag==-1)  imgObj.style.left = parseInt(imgObj.style.left)-(52*to_move)+'px';	
	
else imgObj.style.left = parseInt(imgObj.style.left)-(52*sum_t1)+'px';	
flag=1;
}//btm

if(to_move>10 && to_move<=20)
{
imgObj.style.left = '25px';		
		
if(flag==1) 
{
if((to_move-10)<=4)
imgObj.style.top = 595 - (55*(to_move-10)) +'px'; 
else
imgObj.style.top = parseInt(imgObj.style.top) - (55*(to_move-10)) +'px'; 
}

if(flag==0)
imgObj.style.top = 595 - (55*(to_move-10)) +'px'; 


if(flag==2)
imgObj.style.top = parseInt(imgObj.style.top) - (52*sum_t1) +'px'; 

flag=2;
}//lft

if(to_move>20 && to_move<=30)
{
imgObj.style.top = '40px';	

if(flag==2)
imgObj.style.left = parseInt(imgObj.style.left) + (54*(to_move-20)) + 'px'; 

if(flag==3)
imgObj.style.left = parseInt(imgObj.style.left) + (54*(sum_t1)) + 'px'; 

flag=3; 
j=10;
}//top

if(to_move>30 && to_move<=40)
{
imgObj.style.left = '570px';	

if(flag==3)	
{
if(to_move-30<6)	
imgObj.style.top = 	60 + (55*(to_move-30)) + 'px'; 	
else
imgObj.style.top = 	40 + (56*(to_move-30)) + 'px'; 	
}

if(flag==4)
{
imgObj.style.top = parseInt(imgObj.style.top) + (52*sum_t1) +'px'; 	
}
flag=4;	
}//r8
}


function  mov_p2()
{
if(to_mov2>40) 
{to_mov2=to_mov2-40; 
imgObj2.style.top = '610px';imgObj2.style.left = '560px';

if(to_mov2<=10) flag=-1;  
else flag=0;
}

if(to_mov2<=10)	
{
if(flag==-1)  imgObj2.style.left = parseInt(imgObj2.style.left)-(52*to_mov2)+'px';	
	
else imgObj2.style.left = parseInt(imgObj2.style.left)-(52*sum_t1)+'px';	
flag=1;
}//btm

if(to_mov2>10 && to_mov2<=20)
{
imgObj2.style.left = '25px';		
		
if(flag==1) 
{
if((to_mov2-10)<=4)
imgObj2.style.top = 595 - (55*(to_mov2-10)) +'px'; 
else
imgObj2.style.top = parseInt(imgObj2.style.top) - (55*(to_mov2-10)) +'px'; 
}


if(flag==0)
imgObj2.style.top = 595 - (55*(to_mov2-10)) +'px'; 

if(flag==2)
imgObj2.style.top = parseInt(imgObj2.style.top) - (52*sum_t1) +'px'; 

flag=2;
}//lft

if(to_mov2>20 && to_mov2<=30)
{
imgObj2.style.top = '40px';	

if(flag==2)
imgObj2.style.left = parseInt(imgObj2.style.left) + (54*(to_mov2-20)) + 'px'; 

if(flag==3)
imgObj2.style.left = parseInt(imgObj2.style.left) + (54*(sum_t1)) + 'px'; 

flag=3; 
j=10;
}//top

if(to_mov2>30 && to_mov2<=40)
{
imgObj2.style.left = '570px';	

if(flag==3)	
{
if(to_mov2-30<6)	
imgObj2.style.top = 	60 + (55*(to_mov2-30)) + 'px'; 	
else
imgObj2.style.top = 	40 + (56*(to_mov2-30)) + 'px'; 	
}

if(flag==4)
{
imgObj2.style.top = parseInt(imgObj2.style.top) + (52*sum_t1) +'px'; 	
}
flag=4;	
}//r8
}
window.onload =init;
</script>

<!--<body background="bgn.jpg" width="100%" height="100%" alt="mario" bgproperties="fixed" bgcolor="#000000">-->

<body>
<form name="pointform" method="post">
<div id="pointer_div" onClick="point_it(event)" style = "background-image:url('blogn.jpg');width:637px;height:638px;">
<img src="point.gif" width="11" height="12" id="cross" style="position:relative;visibility:hidden;z-index:2;"><span style="position:absolute;top:630px;left:580px"></span></div>
</form> 

<div >
<img src="dog1.gif" id="tk1" width="59" height="50" alt="dogg1" style="position:absolute"/>
<img src="new_dogg.gif"  id="tk2" width="59" height="50" alt="dogg2" style="position:absolute"/>


<!--creation of boxes-->
<div class="deed_cards" id="shww" onMouseOut="allot()">
<div class ="t1" onMouseOver="boxx(1)" style="top:587px;left:507px;"></div>
<div class ="t2" onMouseOver="boxx(2)" style="top:587px;left:455px;"></div>
<div class ="t3" onMouseOver="boxx(3)" style="top:587px;left:403px;"></div>
<div class ="t4" onMouseOver="boxx(4)" style="top:587px;left:351px;"></div>
<div class ="t5" onMouseOver="boxx(5)" style="top:587px;left:299px;"></div>
<div class ="t6" onMouseOver="boxx(6)" style="top:587px;left:248px;"></div>
<div class ="t7" onMouseOver="boxx(7)" style="top:587px;left:196px;"></div>
<div class ="t8" onMouseOver="boxx(8)" style="top:587px;left:144px;"></div>
<div class ="t9" onMouseOver="boxx(9)" style="top:587px; left:92px;"></div>
<div class ="jail" onMouseOver="boxx(10)" style="top:587px; left:15px;"></div>

<div class ="l1" onMouseOver="boxx(11)" style="top:535px; left:15px;"></div>
<div class ="l2" onMouseOver="boxx(12)" style="top:483px; left:15px;"></div>
<div class ="l3" onMouseOver="boxx(13)" style="top:431px; left:15px;"></div>
<div class ="l4" onMouseOver="boxx(14)" style="top:379px; left:15px;"></div>
<div class ="l5" onMouseOver="boxx(15)" style="top:327px; left:15px;"></div>
<div class ="l6" onMouseOver="boxx(16)" style="top:275px; left:15px;"></div>
<div class ="l7" onMouseOver="boxx(17)" style="top:223px; left:15px;"></div>
<div class ="l8" onMouseOver="boxx(18)" style="top:171px; left:15px;"></div>
<div class ="l9" onMouseOver="boxx(19)" style="top:119px; left:15px;"></div>
<div class ="park" onMouseOver="boxx(20)" style="top:43px; left:15px;"></div>

<div class ="u1" onMouseOver="boxx(21)" style="top:43px; left:92px;"></div>
<div class ="u2" onMouseOver="boxx(22)" style="top:43px; left:144px;"></div>
<div class ="u3" onMouseOver="boxx(23)" style="top:43px; left:196px;"></div>
<div class ="u4" onMouseOver="boxx(24)" style="top:43px; left:248px;"></div>
<div class ="u5" onMouseOver="boxx(25)" style="top:43px; left:300px;"></div>
<div class ="u6" onMouseOver="boxx(26)" style="top:43px; left:352px;"></div>
<div class ="u7" onMouseOver="boxx(27)" style="top:43px; left:404px;"></div>
<div class ="u8" onMouseOver="boxx(28)" style="top:43px; left:456px;"></div>
<div class ="u9" onMouseOver="boxx(29)" style="top:43px; left:508px;"></div>
<div class ="spam" onMouseOver="boxx(30)" style="top:43px; left:560px;"></div>

<div class ="r1" onMouseOver="boxx(31)" style="top:120px; left:560px;"></div>
<div class ="r2" onMouseOver="boxx(32)" style="top:172px; left:560px;"></div>
<div class ="r3" onMouseOver="boxx(33)" style="top:224px; left:560px;"></div>
<div class ="r4" onMouseOver="boxx(34)" style="top:276px; left:560px;"></div>
<div class ="r5" onMouseOver="boxx(35)" style="top:328px; left:560px;"></div>
<div class ="r6" onMouseOver="boxx(36)" style="top:380px; left:560px;"></div>
<div class ="r7" onMouseOver="boxx(37)" style="top:432px; left:560px;"></div>
<div class ="r8" onMouseOver="boxx(38)" style="top:484px; left:560px;"></div>
<div class ="r9" onMouseOver="boxx(39)" style="top:536px; left:560px;"></div>

</div>
<!--<div id="t1" style="display:block"></div>
<div id="t1" style="display:block"></div>
<div id="t1" style="display:block"></div>
<div id="t1" style="display:block"></div>

<!--<div style="position:absolute;top:30px;left:680px">
<!--<img src="" width="139" height="208" alt="yahoo" />

<p id="d"> the topic </p>
<p id="d3"> the topic </p>-->
<div id="bx" style="display:none"></div>
<div id="bx2" style="display:none"></div>
<div id="c3" style="display:block"></div>
<div id="c1" style="display:block;top:35px;let:680px; color:#FFF">
<?php
echo $_SESSION['cb1'];
echo '<br><br>';
echo $_SESSION['cb2'];
?>

</div>

<div id="all">
<img src="bldeed.gif" id="b" width="200" height="240" style="position:absolute;display:none; top:160px; left:320px ">
<img src="gdeed.gif" id="g" width="200" height="240" style="position:absolute;display:none; top:160px; left:320px ">
<img src="lbdeed.gif" id="lb" width="200" height="240" style="position:absolute;display:none; top:160px; left:320px ">
<img src="odeed.gif" id="o" width="200" height="240" style="position:absolute;display:none; top:160px; left:320px ">
<img src="ydeed.gif" id="y" width="200" height="240" style="position:absolute;display:none; top:160px; left:320px ">
<img src="rdeed.gif" id="r" width="200" height="240" style="position:absolute;display:none; top:160px; left:320px ">
<img src="brdeed.gif" id="w" width="200" height="240" style="position:absolute;display:none; top:160px;left:320px ">
<img src="pnk.gif" id="p" width="200" height="240" style="position:absolute;display:none; top:160px;left:320px ">
</div>

<div id="bp" style="position:absolute;display:block; top:215px;left:430px;width:20px;height:20px"></div>
<div id="bp2" style="position:absolute;display:block; top:260px;left:420px;width:20px;height:20px">
</div>

<!--<div id="mv" style="position:absolute;display:block; top:220px;left:420px;width:20px;height:20px">
</div>-->

<p id="mb"></p>

<input type="button" id="roll"  style="display:none;top:200px;left:200px;position:absolute" value="roll!" onClick="rll6()">

<input type="button" id="bu"  style="display:none;top:340px;left:120px;position:absolute" value="buy" onClick="buyng()">
<input type="button" id="au"  style="display:none;top:340px;left:170px;position:absolute" value="auction" onClick="auctng()">

<div id="pl1" style="position:absolute;display:none;top:200px;left:300px; color:#F00">player?</div>
<div id="c1t" > 
</div>

<div id="mv" style="position:absolute;display:block;font-size:x-large; font-family:'Comic Sans MS', cursive; color:#FFF;top:175px;left:350px"></div>

</body>
</html>
