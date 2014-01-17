
var tt;
var arg;
//set the number of dice to throw
//tt="ONE" OR "TWO" OR "THREE";
function dice()
{
  var num=Math.floor(Math.random()*5+1);
  return num;
}
function throws(arg)
{
  tt=document.frm.sel.value;
  if(tt=="ONE")
  {
    document.getElementById("im1").style.visibility="visible";
    document.getElementById("im2").style.visibility="hidden";
    document.getElementById("im3").style.display="none";
   if(arg=="rot")
   {
     document.frm.dimg1.src="hthrow-dice/images/dice.gif";
   }else{
     document.frm.dimg1.src="hthrow-dice/images/dice"+dice()+".gif";
   }
 }else if(tt=="TWO")
 {
    document.getElementById("im1").style.visibility="visible";
    document.getElementById("im2").style.visibility="visible";
    document.getElementById("im3").style.display="none";
    if(arg=="rot")
    {
      document.frm.dimg1.src="hthrow-dice/images/dice.gif";
      document.frm.dimg2.src="hthrow-dice/images/dice.gif";

    }else{
      document.frm.dimg1.src="hthrow-dice/images/dice"+dice()+".gif";
      document.frm.dimg2.src="hthrow-dice/images/dice"+dice()+".gif";
    }
  }else{
    document.getElementById("im1").style.visibility="visible";
    document.getElementById("im2").style.visibility="visible";
    document.getElementById("im3").style.display="block";
    if(arg=="rot")
    {
      document.frm.dimg1.src="hthrow-dice/images/dice.gif";
      document.frm.dimg2.src="hthrow-dice/images/dice.gif";
      document.frm.dimg3.src="hthrow-dice/images/dice.gif";
    }else{
     document.frm.dimg1.src="hthrow-dice/images/dice"+dice()+".gif";
     document.frm.dimg2.src="hthrow-dice/images/dice"+dice()+".gif";
     document.frm.dimg3.src="hthrow-dice/images/dice"+dice()+".gif";
   }
  }
}
document.write("<form name=frm><table align=center><tr><td align=center><br>");
document.write("<select name=sel><option name=one>ONE</option><option name=two selected>TWO</option><option name=three>THREE</option></select>");
document.write("<input type=button value='throw die' onmousedown='throws(\"rot\");' onmouseup='throws(\"dis\");'>");
document.write("</td></tr><tr><td><br>");
document.write("<table align=center border=0 bgcolor=#CAE1FF width=200 height=100>");
document.write("<tr><td align=center><img name=dimg1 id=im1 src=hthrow-dice/images/dice1.gif width=100 height=100 ><img name=dimg2 id=im2 src=hthrow-dice/images/dice2.gif width=100 height=100 > ");
document.write("<img Style ='display:none;' src=hthrow-dice/images/dice3.gif name=dimg3 id=im3 width=100 height=100> ");
document.write("<div align=right>&copy;<a href='http://www.hscripts.com' style='font-size:12px; font-family: arial, verdana, san-serif;font-weight: bold; color: green;text-decoration:none;'> hscripts.com</a></td></tr></table></td></tr></table></form>");

