
if($colr==0)
{
$w=$var3['own_0'];	
$w_arr=explode(",",$w);
$pos=array_search($b,$w_arr);
$w_arr[$pos]='-1';
$w=implode(",",$w_arr);


$qw="UPDATE groups set own_0= ".$w." where pid=0 and gid='{$_SESSION['grp']}'";
mysql_query($qw);

/*$p_mn=$var2['own_0'];
$arr=explode(",",$p_mn);

$arr[]=$b;
$p_mn=implode(",",$arr);

$qw2="UPDATE groups set own_0=".$p_mn."  where pid=$fpd and gid='{$_SESSION['grp']}'";
mysql_query($qw2);*/
}


if($colr==1)
{
$w=$var3['own_1'];	
$w_arr=explode(",",$w);
$pos=array_search($b,$w_arr);
$w_arr[$pos]='-1';
$w=implode(",",$w_arr);

$qw="UPDATE groups set own_1=".$w."  where pid=0 and gid='{$_SESSION['grp']}'";
mysql_query($qw);

/*$p_mn=$var2['own_1'];
$arr=explode(",",$p_mn);

$arr[]=$b;
$p_mn=implode(",",$arr);

$qw2="UPDATE groups set own_1=".$p_mn."  where pid=$fpd and gid='{$_SESSION['grp']}'";
mysql_query($qw2);*/
}

if($colr==2)
{
$w=$var3['own_2'];	
$w_arr=explode(",",$w);
$pos=array_search($b,$w_arr);
$w_arr[$pos]='-1';
$w=implode(",",$w_arr);

$qw="UPDATE groups set own_2=".$w."  where pid=0 and gid='{$_SESSION['grp']}'";
mysql_query($qw);

/*$p_mn=$var2['own_2'];
$arr=explode(",",$p_mn);

$arr[]=$b;
$p_mn=implode(",",$arr);

$qw2="UPDATE groups set own_2=".$p_mn."  where pid=$fpd and gid='{$_SESSION['grp']}'";
mysql_query($qw2);*/
}



if($colr==3)
{
$w=$var3['own_3'];	
$w_arr=explode(",",$w);
$pos=array_search($b,$w_arr);
$w_arr[$pos]='-1';
$w=implode(",",$w_arr);

$qw="UPDATE groups set own_3=".$w."  where pid=0 and gid='{$_SESSION['grp']}'";
mysql_query($qw);

/*$p_mn=$var2['own_3'];
$arr=explode(",",$p_mn);

$arr[]=$b;
$p_mn=implode(",",$arr);

$qw2="UPDATE groups set own_3=".$p_mn."  where pid=$fpd and gid='{$_SESSION['grp']}'";
mysql_query($qw2);*/
}


if($colr==4)
{
$w=$var3['own_4'];	
$w_arr=explode(",",$w);
$pos=array_search($b,$w_arr);
$w_arr[$pos]='-1';
$w=implode(",",$w_arr);


$qw="UPDATE groups set own_4=".$w."  where pid=0 and gid='{$_SESSION['grp']}'";
mysql_query($qw);

/*$p_mn=$var2['own_4'];
$arr=explode(",",$p_mn);

$arr[]=$b;
$p_mn=implode(",",$arr);

$qw2="UPDATE groups set own_4=".$p_mn."  where pid=$fpd and gid='{$_SESSION['grp']}'";
mysql_query($qw2);*/
}


if($colr==5)
{
$w=$var3['own_5'];	
$w_arr=explode(",",$w);
$pos=array_search($b,$w_arr);
$w_arr[$pos]='-1';
$w=implode(",",$w_arr);

$qw="UPDATE groups set own_5=".$w."  where pid=0 and gid='{$_SESSION['grp']}'";
mysql_query($qw);
/*
$p_mn=$var2['own_5'];
$arr=explode(",",$p_mn);

$arr[]=$b;
$p_mn=implode(",",$arr);

$qw2="UPDATE groups set own_5=".$p_mn."  where pid=$fpd and gid='{$_SESSION['grp']}'";
mysql_query($qw2);*/
}


if($colr==6)
{
$w=$var3['own_6'];	
$w_arr=explode(",",$w);
$pos=array_search($b,$w_arr);
$w_arr[$pos]='-1';
$w=implode(",",$w_arr);

$qw="UPDATE groups set own_6=".$w."  where pid=0 and gid='{$_SESSION['grp']}'";
mysql_query($qw);

/*
$p_mn=$var2['own_6'];
$arr=explode(",",$p_mn);

$arr[]=$b;
$p_mn=implode(",",$arr);

$qw2="UPDATE groups set own_6= ".$p_mn."  where pid=$fpd and gid='{$_SESSION['grp']}'";
mysql_query($qw2);*/
}


if($colr==7)
{
$w=$var3['own_7'];	
$w_arr=explode(",",$w);
$pos=array_search($b,$w_arr);
$w_arr[$pos]='-1';
$w=implode(",",$w_arr);

$qw="UPDATE groups set own_7=".$w."  where pid=0 and gid='{$_SESSION['grp']}'";
mysql_query($qw);

/*
$p_mn=$var2['own_7'];
$arr=explode(",",$p_mn);

$arr[]=$b;
$p_mn=implode(",",$arr);

$qw2="UPDATE groups set own_7=".$p_mn."  where pid=$fpd and gid='{$_SESSION['grp']}'";
mysql_query($qw2);*/
}

if($colr==8)
{
$w=$var3['own_8'];	
$w_arr=explode(",",$w);
$pos=array_search($b,$w_arr);
$w_arr[$pos]='-1';
$w=implode(",",$w_arr);

$qw="UPDATE groups set own_8=".$w."  where pid=0 and gid='{$_SESSION['grp']}'";
mysql_query($qw);

/*
$p_mn=$var2['own_8'];
$arr=explode(",",$p_mn);

$arr[]=$b;
$p_mn=implode(",",$arr);

$qw2="UPDATE groups set own_8=".$p_mn."  where pid=$fpd and gid='{$_SESSION['grp']}'";
mysql_query($qw2);*/
}

