<?php  
$user=$_POST['user'];  
    $password=$_POST['password']; 
    mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('movie') or die("cannot select DB");  
  
 
    $query=mysql_query("SELECT * FROM newuser WHERE Username='"+user+"' AND Password='"+password+"'");  
    $numrows=mysql_num_rows($query);  
    if($numrows!=0)  
    {  
	    while($row=mysql_fetch_assoc($query))  
    	   {  
    		$dbuser=$row['user'];  
   		 $dbpassword=$row['password'];  
    	   }  
  
  	  if($user == $dbuser && $password == $dbpassword)  
   	 {  
    		session_start();  
    		$_SESSION['sess_user']=$user;  
  		   header("Location: member.php" );  
    	}  
    }
 else
   {  
    echo "Invalid username or password!";  
    }  
    
?>
