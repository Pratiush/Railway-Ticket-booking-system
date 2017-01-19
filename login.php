<?php
session_start();
$uname=$_POST['uname'];
$password=$_POST['password'];


mysql_connect("localhost","root","");
mysql_select_db("bmr");


$query1="SELECT * FROM `bmr`.`travel` WHERE uname='$uname' AND password='$password'";
$result=mysql_query($query1);
$count = mysql_num_rows($result);
if($count!=0){
		
	$_SESSION['uname']=$uname;	
	header("location:find.php");
}
else{
		
		echo"NO RECORD EXIST";
	}
	



?>