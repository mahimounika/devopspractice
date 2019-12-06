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

if (isset($_POST['password'])) 
{ 
$d=$_POST['password'];
}
if (isset($_POST[''])) 
{ 
$e=$_POST['email'];
}
if (isset($_POST['gender'])) 
{ 
$f=$_POST['gender'];
}

$sql = "insert into newuser(Name, Password, ConfirmPassword, PhNo, EmailId, Gender) values('$a' , '$b' , '$c' , '$d' , '$e' , '$f')";
$result = mysql_query($sql,$link);
if($result)
echo "registration success";
else
echo mysql_error();
?>