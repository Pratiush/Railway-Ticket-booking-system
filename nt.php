<?php
$nt=$_POST['nt'];
$tnumber=$_POST['tnumber'];

mysql_connect("localhost","root","");
mysql_select_db("bmr");

$query="SELECT * FROM `train` WHERE tnumber='$tnumber'";
$result1=mysql_query($query);


while($row = mysql_fetch_array($result1, MYSQL_ASSOC)) {
      echo "Train Number :{$row['tnumber']}  <br> ".
         "Train Name : {$row['tname']} <br> ".
         "Arrival Time : {$row['atime']} <br> ".
         "--------------------------------<br>";
   }





?>