
<?php 
session_start();
if(!isset($_SESSION['grp']))
{
$_SESSION['grp']=105106;  
$_SESSION['pd1']=105;     
$_SESSION['pd2']=106;  

$_SESSION['to1']="1";
$_SESSION['to2']="2";

$_SESSION['w1']='';      
$_SESSION['w2']='';
$_SESSION['vr1']='';     
$_SESSION['vr2']='';

setcookie("cb1","monsterr");
setcookie("cb2","godofwar");
setcookie("sp1","15000");
setcookie("sp2","15000");
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Webstreet Game Online..</title>
<style>

body {
    min-width:150px;
}

button{
position:absolute;
top: 100px;
left: 150px;}

 #bnn,#rule,#menu,#build,#blr,#yes,#no,#bu,#au,#ft,#w1,#w2,#fob1,#fob2 {
         position:absolute;       
        -moz-box-shadow:inset -37px -2px 0px 5px #7a8eb9;
        -webkit-box-shadow:inset -37px -2px 0px 5px #7a8eb9;
        box-shadow:inset -37px -2px 0px 5px #7a8eb9;
        
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #637aad), color-stop(1, #5972a7));
        background:-moz-linear-gradient(top, #637aad 5%, #5972a7 100%);
        background:-webkit-linear-gradient(top, #637aad 5%, #5972a7 100%);
        background:-o-linear-gradient(top, #637aad 5%, #5972a7 100%);
        background:-ms-linear-gradient(top, #637aad 5%, #5972a7 100%);
        background:linear-gradient(to bottom, #637aad 5%, #5972a7 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#637aad', endColorstr='#5972a7',GradientType=0);
        
        background-color:#637aad;
        
        -moz-border-radius:7px;
        -webkit-border-radius:7px;
        border-radius:7px;
        
        border:2px solid #314179;
        
        display:inline-block;
        color:#ffffff;
        font-family:arial;
        font-size:13px;
        font-weight:bold;
        padding:5px 12px;
        text-decoration:none;
 }
   #bnn:hover,#rule:hover,#menu:hover,#build:hover,#blr:hover,#yes:hover,#no:hover,#bu:hover,#au:hover,
#w1:hover,#w2:hover,#fob1:hover,#fob2:hover {
        
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #5972a7), color-stop(1, #637aad));
        background:-moz-linear-gradient(top, #5972a7 5%, #637aad 100%);
        background:-webkit-linear-gradient(top, #5972a7 5%, #637aad 100%);
        background:-o-linear-gradient(top, #5972a7 5%, #637aad 100%);
        background:-ms-linear-gradient(top, #5972a7 5%, #637aad 100%);
        background:linear-gradient(to bottom, #5972a7 5%, #637aad 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5972a7', endColorstr='#637aad',GradientType=0);
        
        background-color:#5972a7;
    }

#bnn:active,#rule:active,#menu:active,#build:active,#blr:active,#yes:active,#no:active,#bu:active,
#au:active,#w1:active,#w2:active,#fob1:active,#fob2:active {
        position:absolute;
        
    }


#bx,#bx2
{
position:absolute;
top:140px;
left:105px;
min-width:425px;
height:275px;

background-color: #121429;
border: 2px solid #000000;
-moz-border-radius: 11px;
-webkit-border-radius: 11px;
border-radius: 11px;
/*IE 7 AND 8 DO NOT SUPPORT BORDER RADIUS*/
-moz-box-shadow: 0px 10px 20px #000000;
-webkit-box-shadow: 0px 10px 20px #000000;
box-shadow: 0px 10px 20px #000000;
filter: progid:DXImageTransform.Microsoft.Shadow(strength = 10, direction = 180, color = '#000000');
-ms-filter: "progid:DXImageTransform.Microsoft.Shadow(strength = 10, Direction = 180, Color = '#000000')";
}

#mb,#ftmb
{
background-color: #121429;
border: 2px solid #000000;
-moz-border-radius: 11px;
-webkit-border-radius: 11px;
border-radius: 11px;
/*IE 7 AND 8 DO NOT SUPPORT BORDER RADIUS*/
-moz-box-shadow: 0px 10px 20px #000000;
-webkit-box-shadow: 0px 10px 20px #000000;
box-shadow: 0px 10px 20px #000000;
filter: progid:DXImageTransform.Microsoft.Shadow(strength = 10, direction = 180, color = '#000000');
-ms-filter: "progid:DXImageTransform.Microsoft.Shadow(strength = 10, Direction = 180, Color = '#000000')";
	
}

#c3,#c1
{
background-color:transparent;
border: 2px solid #000000;
-moz-border-radius: 22px;
-webkit-border-radius: 22px;
border-radius: 22px;
/*IE 7 AND 8 DO NOT SUPPORT BORDER RADIUS*/
-moz-box-shadow: 0px 10px 19px #000000;
-webkit-box-shadow: 0px 10px 19px #000000;
box-shadow: 0px 10px 19px #000000;
filter: progid:DXImageTransform.Microsoft.Shadow(strength = 10, direction = 180, color = '#000000');
-ms-filter: "progid:DXImageTransform.Microsoft.Shadow(strength = 10, Direction = 180, Color = '#000000')";

position:absolute;
top:450px;
left:680px;
min-width:17%;
height:12%;


font-family: 'lucida sans unicode', 'lucida grande', sans-serif;
color: 000000;
font-size: 15px;
font-weight: bold;
text-transform: uppercase;
word-spacing: -7pt;
}


#ca
{
position:absolute;	
border: 2px solid #000000;
-moz-border-radius: 22px;
-webkit-border-radius: 22px;
border-radius: 22px;

-moz-box-shadow: 0px 10px 19px #000000;
-webkit-box-shadow: 0px 10px 19px #000000;
box-shadow: 0px 10px 19px #000000;
filter: progid:DXImageTransform.Microsoft.Shadow(strength = 10, direction = 180, color = '#000000');
-ms-filter: "progid:DXImageTransform.Microsoft.Shadow(strength = 10, Direction = 180, Color = '#000000')";
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

.park
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


.r1,.r2,.r3,.r4,.r5,.r6,.r7,.r8,.r9,.r10,.r11
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



.dgb{
position:absolute;	
left:29%;
top:68%;	
width:8%;
height:5%;

-webkit-animation: cssAnimation 0.3034s 1 ease-out;
-moz-animation: cssAnimation 0.3034s 1 ease-out;
-o-animation: cssAnimation 0.3034s 1 ease-out;

background:-webkit-gradient(linear, 19% 42%, 14% 4%, from(#2C3960), to(#FFFFFF))

-moz-box-shadow: 11px 8px 26px #000000;
-webkit-box-shadow: 11px 8px 26px #000000;
box-shadow: 11px 8px 26px #000000;

border:none 5px #000000;
-moz-border-radius-topleft: 14px;
-moz-border-radius-topright:15px;
-moz-border-radius-bottomleft:15px;
-moz-border-radius-bottomright:14px;
-webkit-border-top-left-radius:14px;
-webkit-border-top-right-radius:15px;
-webkit-border-bottom-left-radius:15px;
-webkit-border-bottom-right-radius:14px;
border-top-left-radius:14px;
border-top-right-radius:15px;
border-bottom-left-radius:15px;
border-bottom-right-radius:14px;

}

@-webkit-keyframes cssAnimation {
from { -webkit-transform: rotate(4deg) scale(1) skew(1deg) translate(10px); }
to { -webkit-transform: rotate(0deg) scale(0.76) skew(1deg) translate(-2px); }
}
@-moz-keyframes cssAnimation {
from { -moz-transform: rotate(4deg) scale(1) skew(1deg) translate(10px); }
to { -moz-transform: rotate(0deg) scale(0.76) skew(1deg) translate(-2px); }
}

@-o-keyframes cssAnimation {
from { -o-transform: rotate(4deg) scale(1) skew(1deg) translate(10px); }
to { -o-transform: rotate(0deg) scale(0.76) skew(1deg) translate(-2px); }
}

/* This imageless css button was generated by CSSButtonGenerator.com */


    #roll {
        
        -moz-box-shadow:inset -32px 2px 0px 2px #ffffff;
        -webkit-box-shadow:inset -32px 2px 0px 2px #ffffff;
        box-shadow:inset -32px 2px 0px 2px #ffffff;
        
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f9f9f9), color-stop(1, #e9e9e9));
        background:-moz-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
        background:-webkit-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
        background:-o-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
        background:-ms-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
        background:linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f9f9f9', endColorstr='#e9e9e9',GradientType=0);
        
        background-color:#f9f9f9;
        
        -moz-border-radius:4px;
        -webkit-border-radius:4px;
        border-radius:4px;
        
        border:1px solid #dcdcdc;
        
        display:inline-block;
        color:#666666;
        font-family:arial;
        font-size:15px;
        font-weight:bold;
        padding:6px 10px;
        text-decoration:none;
        
        text-shadow:0px 0px 0px #ffffff;
        
    }
    #roll:hover {
        
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #e9e9e9), color-stop(1, #f9f9f9));
        background:-moz-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
        background:-webkit-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
        background:-o-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
        background:-ms-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
        background:linear-gradient(to bottom, #e9e9e9 5%, #f9f9f9 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e9e9e9', endColorstr='#f9f9f9',GradientType=0);
        
        background-color:#e9e9e9;
    }
    #roll:active {
        position:absolute;
        top:1px;
    }

#plyr
{
font-family: 'lucida sans unicode', 'lucida grande', sans-serif;
color: 000000;
font-size: 15px;
font-weight: bold;
text-transform: uppercase;
word-spacing: -7pt;
}


#p1,#p2,#p3,#p4,#p5,#p6,#p7,#p8,#p9,#p10/*#p21,#p22,#p23,#p24,#p25,#p26,#p27,#p28,#p29,#p30,#p31,#p32,#p33,#p34,#p35,#p36,#p37,#p38,#p39**/
{
font-family: 'lucida sans unicode', 'lucida grande', sans-serif;
color: 000000;
font-size: 12px;
	
position:absolute;	
width:4.2%;height:2%;border:1 px #03C;
background-color:transparent;
}

#p11,#p12,#p13,#p14,#p15,#p16,#p17,#p18,#p19,#p20
{
font-family: 'lucida sans unicode', 'lucida grande', sans-serif;
color: 000000;
font-size: 12px;
	
position:absolute;	
width:4%;height:2%;border:1 px #03C;
background-color:transparent;

-webkit-transform: rotate(+90deg); 
-moz-transform: rotate(+90deg);	
}

#p21,#p22,#p23,#p24,#p25,#p26,#p27,#p28,#p29
{
font-family: 'lucida sans unicode', 'lucida grande', sans-serif;
color: 000000;
font-size: 12px;
	
position:absolute;	
width:4%;height:2%;border:1 px #03C;
background-color:transparent;

-webkit-transform: rotate(-180deg); 
-moz-transform: rotate(-180deg);	
}


#p31,#p32,#p33,#p34,#p35,#p36,#p37,#p38,#p39
{
font-family: 'lucida sans unicode', 'lucida grande', sans-serif;
color: 000000;
font-size: 12px;
	
position:absolute;	
width:4.3%;height:2.5%;border:1 px #03C;
background-color:transparent;

-webkit-transform: rotate(+270deg); 
-moz-transform: rotate(+270deg);	
}
</style>
 
</head>
<script type="text/javascript" src="jquery/jquery-1.9.js"></script>


<script>
var cbn1,cbn2;

var val=1000;var centr=0;
var imgObj = null, imgObj2=null;
var sum_t1;
var to_move=0,to_mov2=0;
var set=0; //1-p1; 0-p2
var temp;//to_move or to_mov2	
var flag=0,flag2=0;//throw dice

var quit=0;
var bg,roll_bn,blck,bsq,dg;
var sp1;
var alln,bu,au;
var turn=0;var robo=0;
var mr_pl;
var fin=0;

var visible=0;//buy lock 
 var cow; //tb or comm

//the side disp ownership
var look=[[5,12,15,25,28,35],[1,3],[6,8,9],[11,13,14],[16,18,19],[21,23,24],[26,27,29],[31,32,34],[37,39]];
var tarr1=[[0,0,0,0,0,0],[1,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]];
var tarr2=[[0,0,0,0,0,0],[0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]];
var sw1=0,sw2=0;

//the blades
var sr1=[[0],[0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0]];
var sr2=[[0],[0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0]];

//the ultimate cookies
var x,ifluck;

//the moves
var shadow1="b40",shadow2="b41"; 

//the server show!
var servr=0;

//the  auction
var ap,coat1,coat2,q1=0,q2=0,neglect=0,sack=0;

function assume()
{
bsq=document.getElementById("bx");		
bg=document.getElementById("bx2");//backgrn blac
roll_bn=document.getElementById("roll");//button roll
blck=document.getElementById("shww");//title disable
sp1=document.getElementById("plyr");//pl name
bu=document.getElementById("bu");
au=document.getElementById("au");
alln=document.getElementById("all");//all cards

dg=document.getElementById("dgb");//dialog roll box
}

function buyng(sendr,sack,cap)
{
assume();	
document.getElementById("shww").style.display="none";
bu.style.display="none";//buy
au.style.display="none";//auction
//blck.style.display="block";
bg.style.display="none";
document.getElementById("bp").style.display="none";
document.getElementById("mv").style.display="none";
bsq.style.display="none";
alln.style.display="none";
document.getElementById("stmt").innerHTML="";

jQuery.ajaxSetup({async:false});

var goh,i,j,pl,sti,stj;

if(sendr==-2)
{
if(set==1) { goh=1; pl=to_move;document.getElementById("p"+to_move).innerHTML="#";}
if(set==0) { goh=2; pl=to_mov2;document.getElementById("p"+to_mov2).innerHTML="@";}
}


else
{ goh=sendr;temp=sack; }

$.get(
"happ.php", 
{buyer:goh, blogs:temp, spac:cap}, 
function(data) {$("#bp").html(data);}
);

for(i=0;i<9;i++)
for(j=0;j<6;j++)
if(look[i][j]==pl) { sti=i;stj=j; i=9;j=7;}

if(goh==1)
tarr1[sti][stj]=1;

if(goh==2)
tarr2[sti][stj]=1;

//dg box to say blog purchase done!
alert('prchsd!');

//read cookie of server permission...
servr=readCookie('serv');
//alert(servr);
if(servr>0)
{
if(set==1)	
sr1[servr][0]=1;
else
sr2[servr][0]=1;
document.getElementById("build").style.display="block";
bsq.style.display="block";
document.getElementById("stmt").innerHTML="you can start to build servers!<br>click on BUILD button!<br>if not now..click BUILD LATER..";
}
}

function auctng()
{
jQuery.ajaxSetup({async:false});
	
$.get(
"happ.php", 
{buyer:"-1",auction:temp}, 
function(data) {$("#bp").html(data);}
);

ap=readCookie('aprice');
coat1=coat2=Math.round(ap/3);

assume();
bu.style.display="none";//buy
au.style.display="none";//auc
document.getElementById("at").style.display="block"; //bg desk

document.getElementById("tell").innerHTML="starting bid space: "+Math.round(ap/3)+" GB"; //coating price 

document.getElementById("book1").style.display="block";//names
document.getElementById("book2").style.display="block";

document.getElementById("bar1").style.display="block";//bar
document.getElementById("bar2").style.display="block";

document.getElementById("book1").innerHTML="monsterr"; //later rep. session or cookie
document.getElementById("book2").innerHTML="godofwarr";

if(set==1) //current player clicked auction..so opponent cbids first!
{document.getElementById("book2").innerHTML+="'s turn";
document.getElementById('bar1').disabled=true;
document.getElementById('w2').style.display="block";
}

else
{document.getElementById("book1").innerHTML+="'s turn";
document.getElementById('bar2').disabled=true;
document.getElementById('w1').style.display="block";
}

document.getElementById("a1").style.display="block";
document.getElementById("a2").style.display="block";
}


function set_hat(maxx)
{
if(q1>q2)
{document.getElementById("bar1").min=document.getElementById("bar2").min=q1;
document.getElementById("bar1").max=document.getElementById("bar2").max=maxx;}

else
{document.getElementById("bar1").min=document.getElementById("bar2").min=q2;
document.getElementById("bar1").max=document.getElementById("bar2").max=maxx;
}}

function hat(which)
{
q1=parseInt(document.getElementById("bar1").value);
q2=parseInt(document.getElementById("bar2").value);	


if(which==1)
{
coat1=Math.round((ap/3)+(q1*5));
var sw1=100+q1;
set_hat(sw1);

document.getElementById("a1").innerHTML="";
document.getElementById("tell").innerHTML="current bid space: "+coat1+" GB"; //coating price 
document.getElementById("bar1").disabled=true;
document.getElementById("bar2").disabled=false;
document.getElementById("book2").innerHTML+="'s turn";	//rep
document.getElementById("book1").innerHTML="monsterr";	
document.getElementById('w2').style.display="block";
document.getElementById('w1').style.display="none";
}

if(which==0)
{
coat2=Math.round((ap/3)+(q2*5));
var sw2=100+q2;
set_hat(sw2);

document.getElementById("a2").innerHTML="";
document.getElementById("tell").innerHTML="current bid space: "+coat2+" GB"; //coating price by p2
document.getElementById("bar2").disabled=true;
document.getElementById("bar1").disabled=false;
document.getElementById("book1").innerHTML+="'s turn";	//rep	
document.getElementById("book2").innerHTML="godofwarr";	
document.getElementById('w1').style.display="block";
document.getElementById('w2').style.display="none";
}


if(which==3)
{
document.getElementById('w1').style.display="none";

if(neglect==1)
{document.getElementById("tell").innerHTML="auction over.domain retained by bank";	//return to game flow!
document.getElementById("fob1").style.display="none";
document.getElementById("bar2").disabled=true;
document.getElementById("bar1").disabled=true;

neglect=2;
}

if(coat2==Math.round(ap/3) && neglect!=2)	
{document.getElementById("fob2").style.display="block";
document.getElementById('w2').style.display="block"; neglect=1;
}

if(neglect==0)
{document.getElementById("tell").innerHTML="# withdraws from auction!"+" sold to  @ for "+coat2+" GB";	
document.getElementById("bar2").disabled=true;
document.getElementById("bar1").disabled=true;
buyng(2,temp,coat2);
}
}

if(which==4)
{
document.getElementById('w2').style.display="none";	

if(neglect==1)
{document.getElementById("tell").innerHTML="auction over.domain retained by bank";	//return to game flow!
document.getElementById("fob2").style.display="none";
document.getElementById("bar2").disabled=true;
document.getElementById("bar1").disabled=true;
neglect=2;
}
	
if( coat2==Math.round(ap/3) && neglect!=2 )	
{
document.getElementById("fob1")	.style.display="block";
document.getElementById('w1').style.display="block"; neglect=1;
}

if(neglect==0)
{document.getElementById("tell").innerHTML="@ wihtdraws from auction!"+" sold to  # for "+coat1+" GB" ;
document.getElementById("bar2").disabled=true;
document.getElementById("bar1").disabled=true;
buyng(1,temp,coat1);
}
}

if(which==5) //he buys anyway!
{ buyng(1,temp,ap); }
if(which==6)
{ buyng(2,temp,ap); }
}

function onch_just(which,val)
{
if(which==1) {document.getElementById("a1").innerHTML=Math.round((ap/3)+(val*5));
document.getElementById('w1').style.display="none";}
if(which==0) {document.getElementById("a2").innerHTML=Math.round((ap/3)+(val*5));
document.getElementById('w2').style.display="none";}
}

function construct()
{document.getElementById("mb").style.display="none";	
rest();




//take_away();
}

function rest(ds)
{
var tom,w,n=3,j;
if(ds==1 || ds==8) n=2;

for(j=0;j<n;j++)
{	tom="b"+look[ds][j];	
w=document.getElementById(tom);
w.style.border="none"; }
}

function dashed(ds)
{
var tom,w,n=3;
if(ds==1 || ds==8) n=2;

for(j=0;j<n;j++)
{	
tom="b"+look[ds][j];	
w=document.getElementById(tom);
w.style.border="dashed";
w.style.borderColor="#000";
w.style.cursor="pointer";
w.onclick=function() {rest(ds); this.style.border="inset";this.style.borderColor="#000";  
document.getElementById("mb").style.display="block"; 
} 

}
}


function monopoly()
{
visible=2;	
var e=document.getElementById("pointer_div");
e.style.opacity="0.9";
e.style.filter ='alpha(opacity=90)';

document.getElementById("shww").style.display="block";

document.getElementById("mb").style.display="none";
document.getElementById("bx").style.display="block";
document.getElementById("stmt").innerHTML="click on one of the 'dashed' blog to build a server!";
document.getElementById("blr").style.display="block";
var i,j;
	
if(set==1)
{
for(i=1;i<9;i++)	
if(sr1[i][0]==1) 
{dashed(i);}
}

if(set==0)
{
for(i=1;i<9;i++)	
if(sr2[i][0]==1) 
{dashed(i);}
}
}

function readCookie(name)
{
var nameEQ = name + "=";
var ca = document.cookie.split(';');
for(var i=0;i < ca.length;i++) {
var c = ca[i];
while (c.charAt(0)==' ') c = c.substring(1,c.length);
if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
}
return null;
}

function eraseCookie(name) {
	createCookie(name,"",-1); }

function luck_zone()
{
cow="cm"+ifluck;	
document.getElementById("bx").style.display="block";	
document.getElementById(cow).style.display="block";	
if(ifluck==2)
{
if(set==1)	{to_move=10; mov_p(10,1);}
if(set==0)	{to_mov2=10; mov_p(10,0);}  
}

if(ifluck==3)
{
if(set==1)	{to_move=40; mov_p(40,1);}
if(set==0)	{to_mov2=40; mov_p(40,0);} 
}
}

function track_zone()
{
cow="tb"+ifluck;	
document.getElementById("bx").style.display="block";	
document.getElementById(cow).style.display="block";	

if(ifluck==10)
{
if(set==1)	{to_move=10; mov_p(10,1);}
if(set==0)	{to_mov2=10; mov_p(10,0);}  
}}


function next()
{
assume();	
bu.style.display="none";//buy
au.style.display="none";//auction
//blck.style.display="block";
bg.style.display="none";
document.getElementById("bp").style.display="none";
document.getElementById("mv").style.display="none";
bsq.style.display="none";
alln.style.display="none";	
document.getElementById("stmt").innerHTML="";
document.getElementById("ftmb").style.display="none";


document.getElementById("bx").style.display="none";	
document.getElementById(cow).style.display="none";
}

function market()
{
if(set==1) temp=to_move;
else temp=to_mov2;

allot();
document.getElementById("bx").style.display="block";		
document.getElementById("bx2").style.display="block";//backgrn blac
document.getElementById("all").style.display="block";

var bu=document.getElementById("bu");//buy
var au=document.getElementById("au");//auction
var goh2;

bu.style.display="none"; 
au.style.display="none";

if(set==0)	
{boxx(to_mov2); 
goh2=2;}

if(set==1)
{ boxx(to_move); 
goh2=1;}

//got this aftr a long tym:p
visible=1;
document.getElementById("shww").onmouseout=function() {boxx(1);}

jQuery.ajaxSetup({async:false});


$.get(
"combo.php", 
{who:goh2,where:temp},
function(data) {$("#q1").html(data);}
);
x=readCookie('monsterr');
ifluck=readCookie('luck');

if(x==1)
{ 
document.getElementById("stmt").innerHTML="  UP FOR SALE!";
bu.style.display="block"; 
au.style.display="block"; }

if(x==2)
{ document.getElementById("stmt").innerHTML="  YOUR BLOG ALREADY!"; }

if(x==3)
{
document.getElementById("stmt").innerHTML="   PAY RENT!";	
}

if(x==10)
{
document.getElementById("stmt").innerHTML="   comments??";		
luck_zone();
}

if(x==11)
{
document.getElementById("stmt").innerHTML="   lets trackback...";			
track_zone();}

if(x==12)
{
document.getElementById("stmt").innerHTML="   ONLINE CHARGES";			
}

if(x==13)
{
document.getElementById("stmt").innerHTML="   DONATION thro PAYPAL";			
}

if(x==14)
{
document.getElementById("stmt").innerHTML="  Welcome to block list!";			
}

if(x==15)
{
document.getElementById("stmt").innerHTML="  Free hosting!take a nap.";			
}

if(x==16)
{document.getElementById("stmt").innerHTML="   STOP SPAM.READ BOOKS.";}

//finish turn button enabled!
setTimeout(function(){document.getElementById("ftmb").style.display="block";},3000);
}

function timepass()
{ next();p_roll(); }


function rll6()
{
var e=document.getElementById("pointer_div");
e.style.opacity="1";
e.style.filter = 'alpha(opacity=100)';

assume();	
sp1.style.display="none";	
bg.style.display="none";	
roll_bn.style.display="none";	
blck.style.display="block";

throwdice();//dog moves
market(); //buy or auction?
}

function p_roll()
{
visible=0;	
document.getElementById("shww").onmouseout=function() {allot();}

var s1=readCookie('sp1');	
var s2=readCookie('sp2');

document.getElementById("my1").innerHTML=s1;
document.getElementById("my2").innerHTML=s2;

set=(set+1)%2;	
assume();
var e=document.getElementById("pointer_div");
e.style.opacity="0.9";
e.style.filter ='alpha(opacity=90)';

document.getElementById("bnn").style.display="none";  //start button
document.getElementById("rule").style.display="block"; 
document.getElementById("menu").style.display="block";
document.getElementById("roll").style.display="block";//roll button

blck.style.display="block";
alln.style.display="block";
sp1.style.display="block";

if(set==1)
sp1.innerHTML="monsterr";
if(set==0)
sp1.innerHTML="godofwar";


document.getElementById("p5").innerHTML='<img  id="server" src="server.gif" style="position:absolute;display:block;width:3%;height:3%" alt="server">';

}
</script>

<script>
function point_it(event){
    pos_x = event.offsetX?(event.offsetX):event.pageX-document.getElementById("pointer_div").offsetLeft;
    pos_y = event.offsetY?(event.offsetY):event.pageY-document.getElementById("pointer_div").offsetTop;
    document.getElementById("cross").style.left = (pos_x-1) ;
    document.getElementById("cross").style.top = (pos_y-15) ;
    document.getElementById("cross").style.visibility = "visible" ;
    document.pointform.form_x.value = pos_x;
    document.pointform.form_y.value = pos_y;}

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
document.getElementById("mv").style.display="none";//title			
document.getElementById("bx").style.display="none";		
document.getElementById("w").style.display="none";	
document.getElementById("lb").style.display="none";	
document.getElementById("p").style.display="none";	
document.getElementById("o").style.display="none";	
document.getElementById("r").style.display="none";	
document.getElementById("y").style.display="none";	
document.getElementById("g").style.display="none";	
document.getElementById("b").style.display="none";	
//white
document.getElementById("ao").style.display="none";	
document.getElementById("wi").style.display="none";	
document.getElementById("on").style.display="none";	
document.getElementById("yi").style.display="none";	
document.getElementById("pa").style.display="none";	
document.getElementById("ic").style.display="none";	
document.getElementById("ms").style.display="none";	
}

function boxx(know)
{	
if(visible==1){ if(set==1) know=to_move; else know=to_mov2;}

if(visible!=2)	
{
var i=know;	
var bs=document.getElementById("bx");	
bs.style.display="block";
var mons=document.getElementById("bp");	
mons.style.display="none";

if(know==1 || know==3) 
{allot();	
 bs.style.display="block";
 mons.style.display="block";
 document.getElementById("w").style.display="block";
 }

else if(know==4)
{
allot();	
bs.style.display="block";
mons.style.display="block";
document.getElementById("on").style.display="block";		
}

else if(know==5)
{
allot();	
bs.style.display="block";
mons.style.display="block";
document.getElementById("ao").style.display="block";		
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

else if(know==12)
{
allot();	
bs.style.display="block";
mons.style.display="block";
document.getElementById("wi").style.display="block";		
}

else if(know==15)
{
allot();	
bs.style.display="block";
mons.style.display="block";
document.getElementById("yi").style.display="block";		
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

else if(know==25)
{
allot();	
bs.style.display="block";
mons.style.display="block";
document.getElementById("ms").style.display="block";		
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

else if(know==35)
{
allot();	
bs.style.display="block";
mons.style.display="block";
document.getElementById("ic").style.display="block";		
}

else if(know==38)
{
allot();	
bs.style.display="block";
mons.style.display="block";
document.getElementById("pa").style.display="block";		
}

else if(know==37 || know==39) 
{allot();	
document.getElementById("b").style.display="block";	
bs.style.display="block";
mons.style.display="block";
}

document.getElementById("mv").style.display="block";	

/*if(know!=2&&know!=4&&know!=5&&know!=7&&know!=10&&know!=12&&know!=15&&know!=17&&know!=20&&know!=22&&know!=25&&know!=28&&know!=30&&know!=33&&know!=35&&know!=36&&know!=38)*/
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
}



function cl_sh()
{ 
var i,j,sheep,c,ctx;
for(i=0;i<9;i++)	
for(j=0;j<6;j++)	
{	
if( (i==0 && j<6) || (i==1 && j<2)|| (i==2 && j<3)|| (i==3 && j<3) || (i==4 && j<3) || (i==5 && j<3) ||(i==6 && j<3)||(i==7 && j<3) ||(i==8 && j<2))	
{
sheep="my"+i+j;
c=document.getElementById(sheep);
ctx=c.getContext("2d");
ctx.clearRect(0,0,20,7);
}}}

function disp1()
{
var sheep,c,ctx,i,j,m=6;

if(sw2==1)
{sw2=0;cl_sh();document.getElementById("dis2").style.color="white";}

	
if(sw1==0)	
{
document.getElementById("dis1").style.color="blue";	
document.getElementById("ca").style.display="block";

for(i=0;i<9;i++)	
for(j=0;j<6;j++)
{	
if(tarr1[i][j]==1)
{
sheep="my"+i+j;
c=document.getElementById(sheep);
ctx=c.getContext("2d");

if(i==0) ctx.fillStyle="#FFF";if(i==1) ctx.fillStyle="#C30";
if(i==2) ctx.fillStyle="#09F";if(i==3) ctx.fillStyle="#F06";if(i==4) ctx.fillStyle="#F60";
if(i==5) ctx.fillStyle="#F00";if(i==6) ctx.fillStyle="#FC0";if(i==7) ctx.fillStyle="#3C0";
if(i==8) ctx.fillStyle="#009";

ctx.fillRect(0,0,20,7);
}
}//for j
} //execute when sw1=0

if(sw1==1)
{cl_sh();
document.getElementById("dis1").style.color="white";	
document.getElementById("ca").style.display="none";	
}
sw1=(sw1+1)%2;
}

function disp2()
{
var sheep,c,ctx,i,j;

if(sw1==1)
{sw1=0;cl_sh();document.getElementById("dis1").style.color="white";}
	

if(sw2==0)	
{
document.getElementById("ca").style.display="block";
document.getElementById("dis2").style.color="blue";

for(i=0;i<9;i++)	
for(j=0;j<6;j++)
if(tarr2[i][j]==1)
{
sheep="my"+i+j;
c=document.getElementById(sheep);
ctx=c.getContext("2d");

if(i==0) ctx.fillStyle="#FFF";if(i==1) ctx.fillStyle="#C30";
if(i==2) ctx.fillStyle="#09F";if(i==3) ctx.fillStyle="#F06";if(i==4) ctx.fillStyle="#F60";
if(i==5) ctx.fillStyle="#F00";if(i==6) ctx.fillStyle="#FC0";if(i==7) ctx.fillStyle="#3C0";
if(i==8) ctx.fillStyle="#009";

ctx.fillRect(0,0,20,7);
}
} //execute when sw2=0


if(sw2==1)
{document.getElementById("ca").style.display="none";
document.getElementById("dis2").style.color="white";
cl_sh();}

sw2=(sw2+1)%2;
}
</script>

<img src="d1.gif"  name="mydice1" style=" position:absolute;top:510px;left:150px;display:block">
<!--<img src="d3.gif" name="mydice1" style="display:block">
<img src="d4.gif" name="mydice1" style="display:block">
<img src="d5.gif" name="mydice1" style="display:block">
<img src="d6.gif" name="mydice1" style="display:block">-->
<img src="d1.gif"  name="mydice2" style="top:510px;left:217px; position:absolute;display:block">
</div>


<script>
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
{sum_t1=3;to_move = to_move+sum_t1;  
//document.getElementById("di").innerHTML=to_move;
if(to_move>40) to_move=to_move-40; 
mov_p(to_move,1);
}

if(set==0)
{to_mov2 = to_mov2+sum_t1;
//document.getElementById("di").innerHTML=to_mov2;
if(to_mov2>40) to_mov2=to_mov2-40;
mov_p(to_mov2,0);
}
}

function  mov_p(jump,wh)
{
var img1,img2;
var tiger="b"+jump;
var p1,p2;		

if(wh==1)
{
document.getElementById(tiger).innerHTML=' <img src="dog1.gif" id="tk1" width="59" height="50" alt="dogg1" style=" top:20%;position:absolute"/> ';
document.getElementById(shadow1).innerHTML="";

if(tiger==shadow2)
{	
document.getElementById(tiger).innerHTML+='<img src="boxergif.gif" id="tk2" width="59" height="50" alt="dogg2" style="position:absolute"/> ';	
}

else
{document.getElementById(shadow2).innerHTML='<img src="boxergif.gif" id="tk2" width="59" height="50" alt="dogg2" style="position:absolute"/>';}
}

if(wh==0)
{	
document.getElementById(tiger).innerHTML='<img src="boxergif.gif" id="tk2" width="59" height="50" alt="dogg2" style="position:absolute"/> ';
document.getElementById(shadow2).innerHTML="";

if(tiger==shadow1)
{document.getElementById(tiger).innerHTML+='<img src="dog1.gif" id="tk1" width="59";height="50" alt="dogg1" style="top:20%;position:absolute"/>';
}

else
{document.getElementById(shadow1).innerHTML=' <img src="dog1.gif" id="tk1" width="59";height="50" alt="dogg1" style="top:20%;position:absolute"/>';
}
}

if(wh==1)  shadow1=tiger;
if(wh==0)  shadow2=tiger;
}

window.onload =init;
</script>

<body background="bgn.jpg" width="100%" height="100%" alt="mario" bgproperties="fixed" bgcolor="#000000">

<input type="button" id="algn"  style="display:block"  value="">
<input type="button" id="bnn"  style="display:block;top:0.05%;left:1.9%; cursor: pointer" value="start play!" onClick="p_roll()">
<input type="button" id="menu"  style="display:none;top:0.05%;left:9%;cursor: pointer"  value="menu">
<input type="button" id="rule"  style="display:none;top:0.05%;left:14.3%;cursor: pointer"  value="rules">
<input type="button" id="build"  onClick="monopoly()" style="display:none;top:0.05%;left:20%;cursor: pointer"  value="build">


<img src="dog1.gif" id="tk1" width="59" height="50" alt="dogg1" style="top:80%;position:absolute;display:none;"/>
<img src="boxergif.gif" id="tk2" width="59" height="50" alt="dogg2" style="position:absolute;display:none"/>

<form name="pointform" method="post">
<div id="pointer_div" style = "background-image:url('blogn.jpg');width:50.5%;
height:92%;">
<span style="position:absolute;top:630px;left:580px"></span></div>
</form> 

<div class="deed_cards" id="shww" onMouseOut="allot()">
<div class ="t1"  id="b1" onMouseOver="boxx(1)" style="top:587px;left:507px;"></div>
<div class ="t2" id="b2"onMouseOver="boxx(2)" style="top:587px;left:455px;"></div>
<div class ="t3" id="b3"onMouseOver="boxx(3)" style="top:587px;left:403px;"></div>
<div class ="t4" id="b4"onMouseOver="boxx(4)" style="top:587px;left:351px;"></div>
<div class ="t5" id="b5"onMouseOver="boxx(5)" style="top:587px;left:299px;"></div>
<div class ="t6" id="b6"onMouseOver="boxx(6)" style="top:587px;left:248px;"></div>
<div class ="t7" id="b7"onMouseOver="boxx(7)" style="top:587px;left:196px;"></div>
<div class ="t8" id="b8"onMouseOver="boxx(8)" style="top:587px;left:144px;"></div>
<div class ="t9" id="b9"onMouseOver="boxx(9)" style="top:587px; left:92px;"></div>
<div class ="jail" id="b10"onMouseOver="boxx(10)" style="top:587px; left:15px;"></div>

<div class ="l1" id="b11"onMouseOver="boxx(11)" style="top:535px; left:15px;"></div>
<div class ="l2" id="b12"onMouseOver="boxx(12)" style="top:483px; left:15px;"></div>
<div class ="l3" id="b13"onMouseOver="boxx(13)" style="top:431px; left:15px;"></div>
<div class ="l4" id="b14"onMouseOver="boxx(14)" style="top:379px; left:15px;"></div>
<div class ="l5" id="b15"onMouseOver="boxx(15)" style="top:327px; left:15px;"></div>
<div class ="l6" id="b16"onMouseOver="boxx(16)" style="top:275px; left:15px;"></div>
<div class ="l7" id="b17"onMouseOver="boxx(17)" style="top:223px; left:15px;"></div>
<div class ="l8" id="b18"onMouseOver="boxx(18)" style="top:171px; left:15px;"></div>
<div class ="l9" id="b19"onMouseOver="boxx(19)" style="top:119px; left:15px;"></div>
<div class ="park" id="b20"onMouseOver="boxx(20)" style="top:41px; left:13px;"></div>

<div class ="u1" id="b21"onMouseOver="boxx(21)" style="top:43px; left:92px;"></div>
<div class ="u2" id="b22"onMouseOver="boxx(22)" style="top:43px; left:144px;"></div>
<div class ="u3" id="b23"onMouseOver="boxx(23)" style="top:43px; left:196px;"></div>
<div class ="u4" id="b24"onMouseOver="boxx(24)" style="top:43px; left:248px;"></div>
<div class ="u5" id="b25"onMouseOver="boxx(25)" style="top:43px; left:300px;"></div>
<div class ="u6" id="b26"onMouseOver="boxx(26)" style="top:43px; left:352px;"></div>
<div class ="u7" id="b27"onMouseOver="boxx(27)" style="top:43px; left:404px;"></div>
<div class ="u8" id="b28"onMouseOver="boxx(28)" style="top:43px; left:456px;"></div>
<div class ="u9" id="b29"onMouseOver="boxx(29)" style="top:43px; left:508px;"></div>
<div class ="spam" id="b30"onMouseOver="boxx(30)" style="top:43px; left:560px;"></div>

<div class ="r1" id="b31"onMouseOver="boxx(31)" style="top:120px; left:560px;"></div>
<div class ="r2" id="b32"onMouseOver="boxx(32)" style="top:172px; left:560px;"></div>
<div class ="r3" id="b33"onMouseOver="boxx(33)" style="top:224px; left:560px;"></div>
<div class ="r4" id="b34"onMouseOver="boxx(34)" style="top:276px; left:560px;"></div>
<div class ="r5" id="b35"onMouseOver="boxx(35)" style="top:328px; left:560px;"></div>
<div class ="r6" id="b36"onMouseOver="boxx(36)" style="top:380px; left:560px;"></div>
<div class ="r7" id="b37"onMouseOver="boxx(37)" style="top:432px; left:560px;"></div>
<div class ="r8" id="b38"onMouseOver="boxx(38)" style="top:484px; left:560px;"></div>
<div class ="r9" id="b39"onMouseOver="boxx(39)" style="top:536px; left:560px;"></div>
<div class ="r10" id="b40" style="top:592px; left:560px;"><img src="dog1.gif" id="tk1" width="59" height="50" alt="dogg1" style="position:absolute"/></div>
<div class ="r11" id="b41" style="top:598px; left:575px;"><img src="boxergif.gif" id="tk2" width="59" height="50" alt="dogg2" style="position:absolute"/></div> 

</div>
<!--<div id="t1" style="display:block"></div>
<div id="t1" style="display:block"></div>
<div id="t1" style="display:block"></div>
<div id="t1" style="display:block"></div>

<!--<div style="position:absolute;top:30px;left:680px">
<!--<img src="" width="139" height="208" alt="yahoo" />-->
<p id="p5" style="top:80%;left:23.5%;position:absolute; color:#000"></p>
<p id="p12" style="top:68.5%;left:5%;position:absolute; color:#303"></p>
<p id="p15" style="top:46.5%;left:5%;position:absolute; color:#000"></p>
<p id="p25" style="top:13%;left:23.5%;position:absolute; color:#000"></p>
<p id="p28" style="top:13%;left:35.5%;position:absolute; color:#000"></p>
<p id="p35" style="top:46.5%;left:42%;position:absolute; color:#000"></p>


<p id="p1" style="top:80%;left:39.5%;position:absolute; color:#FFF"></p>
<p id="p3" style="top:80%;left:31.5%;position:absolute; color:#FFF"></p>

<p id="p6" style="top:80%;left:19.3%;position:absolute; color:#FFF"></p>
<p id="p8" style="top:80%;left:11.1%;position:absolute; color:#FFF"></p>
<p id="p9" style="top:80%;left:7.1%;position:absolute; color:#FFF"></p>

<p id="p11" style="top:76%;left:5%;position:absolute; color:#FFF"></p>
<p id="p13" style="top:61.5%;left:5%;position:absolute; color:#FFF"></p>
<p id="p14" style="top:54%;left:5%;position:absolute; color:#FFF"></p>

<p id="p16" style="top:39%;left:5%;position:absolute; color:#000"></p>
<p id="p18" style="top:25%;left:5%;position:absolute; color:#000"></p>
<p id="p19" style="top:17%;left:5%;position:absolute; color:#000"></p>

<p id="p21" style="top:13%;left:7.5%;position:absolute; color:#000"></p>
<p id="p23" style="top:13%;left:15.5%;position:absolute; color:#000"></p>
<p id="p24" style="top:13%;left:19.5%;position:absolute; color:#000"></p>

<p id="p26" style="top:13%;left:27.5%;position:absolute; color:#000"></p>
<p id="p27" style="top:13%;left:31.5%;position:absolute; color:#000"></p>
<p id="p29" style="top:13%;left:39.5%;position:absolute; color:#000"></p>

<p id="p31" style="top:17.5%;left:42%;position:absolute;color:#FFF"></p>
<p id="p32" style="top:24%;left:42%;position:absolute;color:#FFF"></p>
<p id="p34" style="top:39%;left:42%;position:absolute;color:#FFF"></p>

<p id="p37" style="top:61%;left:42%;position:absolute; color:#FFF"></p>
<p id="p39" style="top:76%;left:42%;position:absolute; color:#FFF"></p>


<div id="bx" style="display:none"></div>
<div id="bx2" style="display:none"></div>

<div id="stmt" style="top:25%; left:10%;position:absolute;font:'Comic Sans MS', cursive; font-size:18px; 
color:#FFF"></div>
<input type="button" id="blr"  onClick="timepass()" style="display:none;top:51%;left:9%;cursor: pointer"  value="build later"></input>

<div id="mb" style="position:absolute;display:none;top:68%;left:8%;width:16%;height:10%;
font:'Comic Sans MS', cursive; text-transform:lowercase;font-size:18px;color:#FFF">&nbsp;&nbsp;&nbsp;Launch a server here?
<input type="button" id="yes"  onClick="construct()" style="top:45%;left:39%;cursor: pointer"  value="yes"></input>
<input type="button" id="no"  onClick="monopoly()" style="top:45%;left:65%;cursor: pointer"  value="nope"></input>
</div>

<!--auction desk-->
<img id="at" src="desk.jpg" style="display:none;position:absolute;top:65%;left:55%;width:40%;height:27%">
<input type="range" id="bar1" style="color:#FFF;display:none;position:absolute;left:56%;top:70%"  value="0" onClick="hat(1)"  onChange="onch_just(1,this.value)"></input>
<input type="range" id="bar2"  style="color:#FFF;display:none; position:absolute;left:83%;top:70%" value="0" onClick="hat(0)"  onChange="onch_just(0,this.value)"></input>

<input type="button" id="w1" style="display:none;top:78%;left:56%;position:absolute;cursor:pointer" 
value="withdraw" onClick="hat(3)">
<input type="button" id="w2" style="display:none;top:78%;left:85%;position:absolute; cursor:pointer" 
value="withdraw" onClick="hat(4)">

<input type="button" id="fob1" style="display:none;top:73%;left:56%;position:absolute;cursor:pointer" 
value="buy?" onClick="hat(5)">
<input type="button" id="fob2" style="display:none;top:68%;left:85%;position:absolute; cursor:pointer" 
value="buy??" onClick="hat(6)">


<p id="book1" style="position:absolute;display:block;top:63%;left:56%;font-family:'Comic Sans MS', cursive; font-size:18px; color:#FFF"></p>

<p id="book2" style="position:absolute;display:block;top:63%;left:83%;font-family:'Comic Sans MS', cursive; font-size:18px; color:#FFF"></p>

<p id="tell" style="position:absolute;display:block;top:83%;left:60%;font-family:'Comic Sans MS', cursive; font-size:18px; color:#FFF"></p>


<div id="a1" style="position:absolute;color:#FFF; font-family:'Comic Sans MS', cursive; font-size:14px;top:74%;
left:56%"></div>
<div id="a2" style="position:absolute;color:#FFF; font-family:'Comic Sans MS', cursive; font-size:14px;top:74%;
left:86%"></div>



<div id="c1" style="display:block;top:5%;left:51%; color:#FFF">
<p id="dis1">#<?php echo $_COOKIE['cb1'].'-';?></p>
<p id="my1" style=" position:absolute;top:1%;left:62%"></p>

<p id="dis2">@<?php echo $_COOKIE['cb2'].'-';?></p> 
<div id="my2" style=" position:absolute;top:56%;left:62%"></div>

<INPUT TYPE="image" SRC="arrow.jpg" width="20"  HEIGHT="20" style="position: absolute;top:15%; left:99%"  
BORDER="0" ALT="hello" onClick="disp1()"></input>
<INPUT TYPE="image" SRC="arrow.jpg" width="20"  HEIGHT="20" style="position: absolute;top:65%; left:99%"  
BORDER="0" ALT="hello" onClick="disp2()"></input>
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

<img src="wiki.gif" id="wi" width="200" height="240" style="position:absolute;display:none; top:160px; left:320px ">
<img src="aol.gif" id="ao" width="200" height="240" style="position:absolute;display:none; top:160px; left:320px ">
<img src="online.gif" id="on" width="200" height="240" style="position:absolute;display:none; top:160px; left:320px ">
<img src="yim.gif" id="yi" width="200" height="240" style="position:absolute;display:none; top:160px; left:320px ">
<img src="paypal.gif" id="pa" width="200" height="240" style="position:absolute;display:none; top:160px; left:320px ">
<img src="ICQ.gif" id="ic" width="200" height="240" style="position:absolute;display:none; top:160px; left:320px ">
<img src="msn.gif" id="ms" width="200" height="240" style="position:absolute;display:block; top:160px; left:320px ">

</div>

<div id="bp" style="position:absolute;display:block; top:215px;left:430px;width:20px;height:20px"></div>
<div id="bp2" style="position:absolute;display:block; top:260px;left:420px;width:20px;height:20px">
</div>

<!--<div id="mv" style="position:absolute;display:block; top:220px;left:420px;width:20px;height:20px">
</div>-->

<p id="mbq"></p>

<input type="button" id="roll" style="display:none;top:75%;left:33%;position:absolute" value="roll dice" onClick="rll6()">
<input type="button" id="bu"  style="display:none;top:51%;left:11%;position:absolute; cursor:pointer" value="buy" onClick="buyng(-2,-2,-2)">
<input type="button" id="au"  style="display:none;top:51%;left:16%;position:absolute;cursor:pointer" value="auction" onClick="auctng()">


<div id="plyr" style="position:absolute;display:none;top:76%;left:22%;"></div>
<div id="c1t"> </div>

<div id="mv" style="position:absolute;display:block;font-size:x-large; font-family:'Comic Sans MS', cursive; 
color:#FFF;top:175px;left:350px"></div>
<div id="asq"></div> 

<div id="e"></div>
<div id="q1"></div>

<div class="dgb" id="dg" style="display:none"></div>

<div id="ca" onMouseOut="allot()" style="display:none;top:5%;left:72%;background-image:url(side.jpg); width:25%; height:27%">
<canvas id="my00"  onMouseOver="boxx(5)" width="20%" height="20%" style="position:absolute;border:1px solid #FFF; 
left:3%;top:5%"></canvas>

<canvas id="my01" onMouseOver="boxx(12)" width="20%" height="20%" style="position:absolute;border:1px solid #FFF; 
left:3%;top:20%;"></canvas>
<canvas id="my02" onMouseOver="boxx(15)" width="20%" height="20%" style="position:absolute;border:1px solid #FFF; 
left:3%;top:35%"></canvas>
<canvas id="my03" onMouseOver="boxx(25)" width="20%" height="20%" style="position:absolute;border:1px solid #FFF; 
left:3%;top:50%"></canvas>
<canvas id="my04" onMouseOver="boxx(28)" width="20%" height="20%" style="position:absolute;border:1px solid #FFF; 
left:3%;top:65%"></canvas>
<canvas id="my05" onMouseOver="boxx(35)" width="20%" height="20%" style="position:absolute;border:1px solid #FFF; 
left:3%;top:80%"></canvas>


<canvas id="my10" onMouseOver="boxx(1)"width="20%" height="20%" style="position:absolute;border:1px solid #C30; 
left:12%;top:5%"></canvas>
<canvas id="my11" onMouseOver="boxx(3)"width="20%" height="20%" style="position:absolute;border:1px solid #C30; 
left:12%;top:20%"></canvas>


<canvas id="my20" onMouseOver="boxx(6)"width="20%" height="20%" style="position:absolute;border:1px solid #09F;
left:20%;top:5%"></canvas>
<canvas id="my21" onMouseOver="boxx(8)"width="20%" height="20%" style="position:absolute;border:1px solid #09F;
left:20%;top:20%"></canvas>
<canvas id="my22" onMouseOver="boxx(9)"width="20%" height="20%" style="position:absolute;border:1px solid #09F;
left:20%;top:35%"></canvas>


<canvas id="my30" onMouseOver="boxx(11)"width="20%" height="20%" style="position:absolute;border:1px solid  #F06;
left:28%;top:5%"></canvas>
<canvas id="my31" onMouseOver="boxx(13)"width="20%" height="20%" style="position:absolute;border:1px solid  #F06;
left:28%;top:20%"></canvas>
<canvas id="my32" onMouseOver="boxx(14)"width="20%" height="20%" style="position:absolute;border:1px solid  #F06;
left:28%;top:35%"></canvas>


<canvas id="my40" onMouseOver="boxx(16)" width="20%" height="20%" style="position:absolute;border:1px solid  #F60; 
left:42%;top:5%"></canvas>
<canvas id="my41" onMouseOver="boxx(18)" width="20%" height="20%" style="position:absolute;border:1px solid  #F60; 
left:42%;top:20%"></canvas>
<canvas id="my42" onMouseOver="boxx(19)" width="20%" height="20%" style="position:absolute;border:1px solid  #F60; 
left:42%;top:35%"></canvas>


<canvas id="my50" onMouseOver="boxx(21)"width="20%" height="20%" style="position:absolute;border:1px solid #F00; 
left:50%;top:5%"></canvas>
<canvas id="my51" onMouseOver="boxx(23)"width="20%" height="20%" style="position:absolute;border:1px solid #F00; 
left:50%;top:20%"></canvas>
<canvas id="my52" onMouseOver="boxx(24)"width="20%" height="20%" style="position:absolute;border:1px solid #F00; 
left:50%;top:35%"></canvas>


<canvas id="my60" onMouseOver="boxx(26)" width="20%" height="20%" style="position:absolute;border:1px solid #FC0; 
left:68%;top:5%"></canvas>
<canvas id="my61" onMouseOver="boxx(27)" width="20%" height="20%" style="position:absolute;border:1px solid #FC0; 
left:68%;top:20%"></canvas>
<canvas id="my62" onMouseOver="boxx(29)" width="20%" height="20%" style="position:absolute;border:1px solid #FC0; 
left:68%;top:35%"></canvas>


<canvas id="my70" onMouseOver="boxx(31)"width="20%" height="20%" style="position:absolute;border:1px solid #3C0;
left:76%;top:5%"></canvas>
<canvas id="my71" onMouseOver="boxx(32)"width="20%" height="20%" style="position:absolute;border:1px solid #3C0;
left:76%;top:20%"></canvas>
<canvas id="my72" onMouseOver="boxx(34)"width="20%" height="20%" style="position:absolute;border:1px solid #3C0;
left:76%;top:35%"></canvas>

<canvas id="my80" onMouseOver="boxx(37)"width="20%" height="20%" style="position:absolute;border:1px solid #009; 
left:84%;top:5%"></canvas>
<canvas id="my81" onMouseOver="boxx(39)"width="20%" height="20%" style="position:absolute;border:1px solid #009; 
left:84%;top:20%"></canvas>
</div>

<img src="cm1.png" id="cm1" style="top:28%;left:17%; position:absolute; display:none">
<img src="cm2.png" id="cm2" style="top:28%;left:17%; position:absolute; display:none">
<img src="cm3.png" id="cm3" style="top:28%;left:17%; position:absolute; display:none">
<img src="cm4.png" id="cm4" style="top:28%;left:17%; position:absolute; display:none">
<img src="cm5.png" id="cm5" style="top:28%;left:17%; position:absolute; display:none">
<img src="cm6.png" id="cm6" style="top:28%;left:17%; position:absolute; display:none">

<img src="tb7.png"  id="tb7"style="top:28%;left:17%; position:absolute; display:none">
<img src="tb8.png"  id="tb8"style="top:28%;left:17%; position:absolute; display:none">
<img src="tb9.png"  id="tb9"style="top:28%;left:17%; position:absolute; display:none">
<img src="tb10.png" id="tb10"style="top:28%;left:17%; position:absolute; display:none">
<img src="tb11.png" id="tb11"style="top:28%;left:17%; position:absolute; display:none">


<div id="ftmb" style="position:absolute;display:none;top:70%;left:25%;width:16%;height:10%;
font:'Comic Sans MS', cursive; text-transform:lowercase;font-size:18px;color:#FFF">
<input type="button" id="ft" onClick="timepass()" style="top:45%;left:49%;cursor:pointer"  value="finish turn">
</input>
</div>

<img  id="data" src="data.gif" style="position:absolute;display:none;top:35%;left:55%" alt="data">
</body>
</html>
