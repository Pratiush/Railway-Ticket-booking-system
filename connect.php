<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$uname=$_POST['uname'];
$password=$_POST['password'];


mysql_connect("localhost","root","");
mysql_select_db("bmr");


$query1="SELECT * FROM `bmr`.`travel` WHERE email='$email' AND phone='$phone' AND password='$password'";
$result=mysql_query($query1);
$count = mysql_num_rows($result);
if($count==0){
$query ="INSERT INTO travel(name,phone,email,uname,password) VALUES('$name','$phone','$email','$uname','$password')";
mysql_query($query);
header("location:home.php");
}
else{
	echo"RECORD ALREADY EXIST PLEASE LOGIN TO YOUR ACCOUNT!!!";
	echo'<br><br>';
	echo'<a href="home.php"><button>Back</button></a>';
}

?>