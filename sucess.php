<?php
session_start();
if(isset($_SESSION['uname']))
{
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sucess</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
$nt=$_SESSION['nt'];
$date=$_POST['date'];
$pnr=(rand(1000000,10000000));
$train=$_SESSION['tnumber'];
$query2="UPDATE `bmr`.`travel` SET `pnr`='$pnr' WHERE `uname`={$_SESSION['uname']}";
mysql_query($query2);

$file=fopen("ticket.doc","w");

$txt1="THANK YOU FOR USING BOOKMYRAIL.COM\n";
fwrite($file,$txt1);
$txt11="###########################################################\n";
fwrite($file,$txt11);
$txt2="\nYOUR RESERVATION CONFIRMED ON DATE:";
fwrite($file,$txt2);
fwrite($file,$date);
$txt5="\nYOUR PNR NUMBER IS: ";
fwrite($file,$txt5);
fwrite($file,$pnr);

$txt9="\nYOUR TRAIN NUMBER IS:";
fwrite($file,$txt9);
fwrite($file,$train);

$txt6="\nWISH YOU A HAPPY AND COMFORTABLE JOURNEY";
fwrite($file,$txt6);
$txt7="\nPLEASED TO SERVE YOU!";
fwrite($file,$txt7);
fclose($file);
?>


THANK YOU!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!<br>
TRAIN BOOKED ON :<?php echo"$date"?><br>
NUMBER OF TICKET:<?php echo"$nt"?><br>
PNR NUMBER:<?php echo"$pnr"?><br>



 
<a href="http://localhost/WebProject/ticket.doc"><button type="submit" class="btn btn-info btn-lg">Print Ticket</button> </a>

<a href="find.php"><button type="submit" class="btn btn-info btn-lg"  >Continue</button></a>


</body>

</html> 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  