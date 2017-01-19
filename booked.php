<?php
session_start();
if(isset($_SESSION['uname']))
{
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book Tickets</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
   .ft-1{
	height:50px;
	background-color:#2f2f2f;
	color: #ffffff;
	vertical-align:center;
	padding-top:10px;
	align:bottom;
	width:100%;
}
 .sp-1{
	 
	height:500px;
 }
 .sp-2{
	 height:500px;
	 }

 
</style>
</head>
<body>
<?php

$tnumber=$_POST['tnumber'];

mysql_connect("localhost","root","");
mysql_select_db("bmr");

$query5="SELECT * FROM `train` WHERE tnumber='$tnumber'";
$result1=mysql_query($query5);
$row1 = mysql_fetch_array($result1, MYSQL_ASSOC);

?>
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">BookMyRail.com</a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Hi! <?php echo"{$_SESSION['uname']}"?></a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>

<div>
<iframe class="col-sm-6 sp-1" src="http://localhost/WebProject/left.php">
</iframe>
<?php require'sucess.php'?>


</div> 
<footer class="navbar navbar-fixed-bottom ft-1 text-center">
  <p>Web Project under guidance of  <a href="http://www.netcamp.in/">netcamp.in</a></p> 
</footer> 

</body> 
</html>