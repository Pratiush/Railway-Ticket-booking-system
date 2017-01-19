
<?php
session_start();
if(isset($_SESSION['uname']))
{
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	  
  
</style>
</head>
  
<body>
<?php
$tnumber=$_POST['tnumber'];
$nt=$_POST['nt'];
mysql_connect("localhost","root","");
mysql_select_db("bmr");

$query2="SELECT * FROM `train` WHERE tnumber='$tnumber'";
$result1=mysql_query($query2);
$row1 = mysql_fetch_array($result1, MYSQL_ASSOC);
$_SESSION['tnumber']=$tnumber;
$_SESSION['nt']=$nt;
if(isset($_SESSION['uname'])){
$query5="INSERT INTO `bmr`.`travel`(tnumber,nt) VALUES ('$tnumber',$nt) WHERE `uname`='$uname' ";
mysql_query($query5);
}

$query3="UPDATE `bmr`.`travel` SET `tnumber`='$tnumber' WHERE `uname`='$uname' ";
mysql_query($query3);
$new=$row1['avail']-$nt;
$query4="UPDATE `bmr`.`train` SET `avail`='$new' WHERE `tnumber`='$tnumber'";
mysql_query($query4);

?>
<div class="container-fluid text-center">
<h3>Train Number:<?php echo"{$row1['tnumber']}"?></h3>
<h3>Train Name:<?php echo"{$row1['tname']}"?></h3>
------------------------------------------------------------------------------------<br>
------------------------------------------------------------------------------------<br>

 
<form method="POST" action="booked.php">
Select Date:<input type="date" date-picker="true"  name="date"  required />
<br><br><br>
<button type="submit" class="btn btn-info btn-lg"  >Book</button>



 </form>
 
</div>
 
</body>
</html>