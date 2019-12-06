<?php
$link = mysql_connect('localhost' , 'root' , '');
if  (!$link) {
        die('could not connect to mysql: ' . mysql_error());
}
mysql_select_db('movie',$link);
echo 'connection ok ';
$a=0;
$b=0;
$c=0;
$d=0;
$e=0;
$f=0;
$g=0;
$h=0;
$i=0;

if (isset($_POST['firstname'])) 
{ 
$a=$_POST['firstname'];
}
if (isset($_POST['email'])) 
{ 
$b=$_POST['email'];
}
if (isset($_POST['user'])) 
{ 
$c=$_POST['user'];
}
if (isset($_POST['date'])) 
{ 
$d=$_POST['date'];
}
if (isset($_POST['password'])) 
{ 
$e=$_POST['password'];
}
if (isset($_POST['card'])) 
{ 
$f=$_POST['card'];
}
if (isset($_POST['exp'])) 
{ 
$g=$_POST['exp'];
}
if (isset($_POST['cvv'])) 
{ 
$h=$_POST['cvv'];
}
if (isset($_POST['chn'])) 
{ 
$i=$_POST['chn'];
}


$sql = "insert into newuser(Name, EmailID, Username,DOB, Password, CardNO, ExpireDate, CVVNO, CardHolderName) values('$a' , '$b' , '$c' , '$d' , '$e' , '$f' , '$g', '$h', '$i')";
$result = mysql_query($sql,$link);
if($result)
echo "registestration success";
else
echo mysql_error();
?>